<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // Get the cart for a specific user
    public function index($user_id)
    {
        $cart = Cart::with('items.product')->firstOrCreate(['user_id' => $user_id]);
        return response()->json($cart);
    }

    // Add a product to a user's cart
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric',
        ]);

        $userId = $request->user_id;

        $cart = Cart::firstOrCreate(['user_id' => $userId]);

        $cartItem = CartItem::where('cart_id', $cart->id)
            ->where('product_id', $request->product_id)
            ->first();

        $totalPrice = $request->price * $request->quantity;

        if ($cartItem) {
            $cartItem->quantity += $request->quantity;
            $cartItem->total_price += $totalPrice;
            $cartItem->save();
        } else {
            $cartItem = CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
                'price' => $request->price,
                'total_price' => $totalPrice,
            ]);
        }

        // Update cart total
        $cart->total_price = $cart->items()->sum('total_price');
        $cart->save();

        return response()->json($cart->load('items.product'));
    }

    // Show a user's cart
    public function show($user_id)
    {
        $cart = Cart::with('items.product')->where('user_id', $user_id)->first();

        if (!$cart) {
            return response()->json(['message' => 'Cart is empty'], 404);
        }

        return response()->json($cart);
    }

    // Update cart item quantity
    public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem = CartItem::findOrFail($id);

        $cartItem->quantity = $request->quantity;
        $cartItem->total_price = $cartItem->price * $request->quantity;
        $cartItem->save();

        $cart = $cartItem->cart;
        $cart->total_price = $cart->items()->sum('total_price');
        $cart->save();

        return response()->json($cart->load('items.product'));
    }

    // Remove a cart item
    public function destroy($id)
    {
        $cartItem = CartItem::findOrFail($id);
        $cart = $cartItem->cart;
        $cartItem->delete();

        $cart->total_price = $cart->items()->sum('total_price');
        $cart->save();

        return response()->json($cart->load('items.product'));
    }
}
