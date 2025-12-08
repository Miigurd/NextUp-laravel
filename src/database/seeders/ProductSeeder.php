<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                "id" => 1,
                "title" => "Vanilla Dream Candle",
                "price" => 299,
                "discount" => 20,
                "note" => "Best seller",
                "image" => "vanilla-dream.png",
                "description" => "Warm vanilla scent with a cozy, creamy finish.",
                "category" => "Scented Candle Line"
            ],
            [
                "id" => 2,
                "title" => "Lavender Breeze Candle",
                "price" => 320,
                "discount" => 15,
                "note" => "Relaxation essential",
                "image" => "lavender-breeze.png",
                "description" => "Calming aroma perfect for stress relief.",
                "category" => "Scented Candle Line"
            ],
            [
                "id" => 3,
                "title" => "Citrus Sunrise Candle",
                "price" => 310,
                "discount" => 10,
                "note" => "Morning boost",
                "image" => "citrus-sunrise.png",
                "description" => "Bright citrus scent for a refreshing mood.",
                "category" => "Scented Candle Line"
            ],
            [
                "id" => 4,
                "title" => "Ocean Mist Candle",
                "price" => 330,
                "discount" => 22,
                "note" => "Bestselling fresh scent",
                "image" => "ocean-mist.png",
                "description" => "A crisp ocean fragrance with airy freshness.",
                "category" => "Scented Candle Line"
            ],
            [
                "id" => 5,
                "title" => "Rose Garden Candle",
                "price" => 350,
                "discount" => 18,
                "note" => "Romantic choice",
                "image" => "rose-garden.png",
                "description" => "Elegant floral aroma inspired by fresh roses.",
                "category" => "Scented Candle Line"
            ],
            [
                "id" => 6,
                "title" => "Caramel Latte Candle",
                "price" => 360,
                "discount" => 25,
                "note" => "Sweet & cozy",
                "image" => "caramel-latte.png",
                "description" => "Rich caramel and espresso blend for warm vibes.",
                "category" => "Scented Candle Line"
            ],
            [
                "id" => 7,
                "title" => "Pine Forest Candle",
                "price" => 340,
                "discount" => 12,
                "note" => "Perfect for holidays",
                "image" => "pine-forest.png",
                "description" => "Earthy pine with forest-fresh notes.",
                "category" => "Scented Candle Line"
            ],
            [
                "id" => 8,
                "title" => "Cinnamon Spice Candle",
                "price" => 345,
                "discount" => 30,
                "note" => "Hot deal",
                "image" => "cinnamon-spice.png",
                "description" => "Warm spice blend for cozy nights.",
                "category" => "Scented Candle Line"
            ],
            [
                "id" => 9,
                "title" => "Jasmine Bloom Candle",
                "price" => 370,
                "discount" => 20,
                "note" => "Premium floral scent",
                "image" => "jasmine-bloom.png",
                "description" => "Soft jasmine aroma with a calming air.",
                "category" => "Scented Candle Line"
            ],
            [
                "id" => 10,
                "title" => "Midnight Amber Candle",
                "price" => 399,
                "discount" => 15,
                "note" => "Luxury pick",
                "image" => "midnight-amber.png",
                "description" => "Rich amber and musk for a sophisticated vibe.",
                "category" => "Scented Candle Line"
            ],

            [
                "id" => 11,
                "title" => "Linen Fresh Room Spray",
                "price" => 180,
                "discount" => 10,
                "note" => "Everyday favorite",
                "image" => "linen-fresh.png",
                "description" => "Crisp cleanliness in every spray.",
                "category" => "Home Fragrance Line"
            ],
            [
                "id" => 12,
                "title" => "Floral Mist Room Spray",
                "price" => 190,
                "discount" => 15,
                "note" => "Popular choice",
                "image" => "floral-mist.png",
                "description" => "Light floral scent for a refreshing home.",
                "category" => "Home Fragrance Line"
            ],
            [
                "id" => 13,
                "title" => "Eucalyptus Oil Diffuser",
                "price" => 450,
                "discount" => 25,
                "note" => "Clear your senses",
                "image" => "eucalyptus-diffuser.png",
                "description" => "Aroma diffuser that refreshes and energizes.",
                "category" => "Home Fragrance Line"
            ],
            [
                "id" => 14,
                "title" => "Vanilla Reed Diffuser",
                "price" => 430,
                "discount" => 12,
                "note" => "Sweet, lasting scent",
                "image" => "vanilla-reed.png",
                "description" => "Long-lasting vanilla fragrance for any room.",
                "category" => "Home Fragrance Line"
            ],
            [
                "id" => 15,
                "title" => "Lavender Reed Diffuser",
                "price" => 420,
                "discount" => 8,
                "note" => "Relaxing aroma",
                "image" => "lavender-reed.png",
                "description" => "Calming lavender for restful spaces.",
                "category" => "Home Fragrance Line"
            ],
            [
                "id" => 16,
                "title" => "Sandalwood Incense Sticks",
                "price" => 99,
                "discount" => 20,
                "note" => "Top seller",
                "image" => "sandalwood-incense.png",
                "description" => "Soothing woody aroma for meditation.",
                "category" => "Home Fragrance Line"
            ],
            [
                "id" => 17,
                "title" => "Rose Petal Incense Sticks",
                "price" => 89,
                "discount" => 18,
                "note" => "Romantic scent",
                "image" => "rose-incense.png",
                "description" => "Soft floral incense for peaceful relaxation.",
                "category" => "Home Fragrance Line"
            ],
            [
                "id" => 18,
                "title" => "Citrus Burst Wax Melt",
                "price" => 120,
                "discount" => 10,
                "note" => "Instant freshness",
                "image" => "citrus-melt.png",
                "description" => "Bright citrus aroma for quick scent lift.",
                "category" => "Home Fragrance Line"
            ],
            [
                "id" => 19,
                "title" => "Forest Pine Wax Melt",
                "price" => 125,
                "discount" => 12,
                "note" => "Holiday favorite",
                "image" => "pine-melt.png",
                "description" => "Woodsy scent that feels like nature indoors.",
                "category" => "Home Fragrance Line"
            ],
            [
                "id" => 20,
                "title" => "Ceramic Oil Burner",
                "price" => 299,
                "discount" => 15,
                "note" => "Stylish & functional",
                "image" => "oil-burner.png",
                "description" => "Aesthetic ceramic burner for oils and melts.",
                "category" => "Home Fragrance Line"
            ],
            [
                "id" => 21,
                "title" => "Aromatherapy Essential Oil Set",
                "price" => 499,
                "discount" => 20,
                "note" => "3 oil bundle",
                "image" => "oil-set.png",
                "description" => "Lavender, peppermint, and lemongrass oils.",
                "category" => "Home Fragrance Line"
            ],
            [
                "id" => 22,
                "title" => "Mini Air Diffuser",
                "price" => 550,
                "discount" => 18,
                "note" => "Compact design",
                "image" => "mini-diffuser.png",
                "description" => "Portable diffuser for desk or bedside use.",
                "category" => "Home Fragrance Line"
            ],

            [
                "id" => 23,
                "title" => "Lavender Bath Bomb",
                "price" => 150,
                "discount" => 10,
                "note" => "Stress relief",
                "image" => "lavender-bomb.png",
                "description" => "Soothing lavender fizzing bath experience.",
                "category" => "Bath & Body Aromatic Line"
            ],
            [
                "id" => 24,
                "title" => "Coconut Milk Soap Bar",
                "price" => 99,
                "discount" => 8,
                "note" => "Soft on skin",
                "image" => "coconut-soap.png",
                "description" => "Moisturizing soap with coconut aroma.",
                "category" => "Bath & Body Aromatic Line"
            ],
            [
                "id" => 25,
                "title" => "Rose Body Scrub",
                "price" => 220,
                "discount" => 15,
                "note" => "Smooth skin",
                "image" => "rose-scrub.png",
                "description" => "Exfoliating scrub with real rose essence.",
                "category" => "Bath & Body Aromatic Line"
            ],
            [
                "id" => 26,
                "title" => "Mint Refresh Hand Cream",
                "price" => 140,
                "discount" => 12,
                "note" => "Light cooling feel",
                "image" => "mint-cream.png",
                "description" => "Moisturizing hand cream with cool mint scent.",
                "category" => "Bath & Body Aromatic Line"
            ],
            [
                "id" => 27,
                "title" => "Amber Noir Candle",
                "price" => 389,
                "discount" => 10,
                "note" => "Signature scent",
                "image" => "amber-noir.png",
                "description" => "Deep amber and musk blend for an indulgent, elegant atmosphere.",
                "category" => "Signature Collection Line"
            ],
            [
                "id" => 28,
                "title" => "White Tea Diffuser",
                "price" => 420,
                "discount" => 12,
                "note" => "Elegant & refreshing",
                "image" => "white-tea.png",
                "description" => "Subtle white tea fragrance that brings calm sophistication to any space.",
                "category" => "Signature Collection Line"
            ],
            [
                "id" => 29,
                "title" => "Cedarwood & Sage Room Spray",
                "price" => 310,
                "discount" => 15,
                "note" => "Nature-inspired",
                "image" => "cedar-sage.png",
                "description" => "Grounding woody notes with herbal freshness for a balanced home scent.",
                "category" => "Signature Collection Line"
            ],
            [
                "id" => 30,
                "title" => "Velvet Rose Candle",
                "price" => 399,
                "discount" => 20,
                "note" => "Romantic luxury",
                "image" => "velvet-rose.png",
                "description" => "Lush rose petals with soft vanilla and amber undertones.",
                "category" => "Signature Collection Line"
            ],
            [
                "id" => 31,
                "title" => "Midnight Oud Reed Diffuser",
                "price" => 480,
                "discount" => 18,
                "note" => "Premium aroma",
                "image" => "midnight-oud.png",
                "description" => "Exotic oud wood with smoky amber for a rich, long-lasting fragrance.",
                "category" => "Signature Collection Line"
            ],
            [
                "id" => 32,
                "title" => "Linen Musk Room Spray",
                "price" => 299,
                "discount" => 10,
                "note" => "Everyday favorite",
                "image" => "linen-musk.png",
                "description" => "Soft linen freshness blended with a hint of warm musk.",
                "category" => "Signature Collection Line"
            ],
            [
                "id" => 33,
                "title" => "Golden Citrus Candle",
                "price" => 370,
                "discount" => 12,
                "note" => "Uplifting scent",
                "image" => "golden-citrus.png",
                "description" => "Bright orange and bergamot notes for an energizing home atmosphere.",
                "category" => "Signature Collection Line"
            ],
            [
                "id" => 34,
                "title" => "Vanilla Sandalwood Diffuser",
                "price" => 440,
                "discount" => 15,
                "note" => "Comfort blend",
                "image" => "vanilla-sandalwood.png",
                "description" => "Warm vanilla balanced with creamy sandalwood for serene comfort.",
                "category" => "Signature Collection Line"
            ]
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['id' => $product['id']],
                $product
            );
        }
    }
}
