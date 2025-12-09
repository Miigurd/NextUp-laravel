<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display all orders for all users.
     */
    public function allOrders()
    {
        // Include the user relationship
        return Order::with(['orderItems.product', 'user'])->get();
    }

    /**
     * Display all orders for a user.
     */
    public function index(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id'
        ]);

        $userId = $request->query('user_id'); // get from query string

        $orders = Order::with('orderItems.product')
            ->where('user_id', $userId)
            ->get();

        if ($orders->isEmpty()) {
            return response()->json([
                'message' => 'No orders found for this user'
            ], 404);
        }

        return response()->json($orders);
    }

    /**
     * Create an Order from the Cart.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id'
        ]);

        $userId = $request->user_id;

        // Fetch user's cart with items + products
        $cart = Cart::with('items.product')
            ->where('user_id', $userId)
            ->first();

        if (!$cart || $cart->items->isEmpty()) {
            return response()->json(['message' => 'Cart is empty'], 400);
        }

        // Calculate total based on CartItems
        $total = $cart->items->sum(function ($item) {
            return $item->quantity * $item->price;
        });

        // Create Order
        $order = Order::create([
            'user_id' => $userId,
            'total_price' => $total
        ]);

        // Create Order Items
        foreach ($cart->items as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price' => $item->price,
                'total_price' => $item->total_price,
            ]);
        }

        // Delete cart + items
        $cart->items()->delete();
        $cart->delete();

        return $order->load('orderItems.product');
    }

    /**
     * Update the status of an order.
     */
    public function updateStatus(Request $request, Order $order)
    {
        // Validate input
        $request->validate([
            'status' => 'required|string|in:Completed',
        ]);

        $order->status = $request->status;
        $order->save();

        return response()->json([
            'message' => 'Order status updated successfully',
            'order' => $order->load('orderItems.product')
        ]);
    }
}
