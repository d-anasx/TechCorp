<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with('products')
            ->where('user_id', auth()->user()->id)
            ->where('status', 'filling')
            ->orWhere('status', 'waiting')->get();
        array_map(function ($order) {
            $order->total = $order->products->sum(fn($product) => $product->price * $product->pivot->quantity);
        }, $orders->all());
        return view('employee.orders', compact('orders'));
    }

    public function updateQuantity(Order $order, Product $product, Request $request)
    {
        $pivot = $order->products()->where('product_id', $product->id)->first();

        if (! $pivot) {
            return response()->json(['message' => 'Produit introuvable'], 404);
        }

        $currentQty = $pivot->pivot->quantity;
        $newQty = $request->action === 'increase'
            ? $currentQty + 1
            : max(1, $currentQty - 1);

        // Update FIRST
        $order->products()->updateExistingPivot(
            $product->id,
            ['quantity' => $newQty]
        );


        $order->load('products');

        //calculate total 
        $newTotal = $order->products->sum(
            fn($p) => $p->price * $p->pivot->quantity
        );

        // 🚨 LIMIT CHECK
        if ($newTotal > 2000) {
            $order->products()->updateExistingPivot(
                $product->id,
                ['quantity' => $currentQty]
            );

            return response()->json([
                'message' => 'Limite de 2000 tokens dépassée'
            ], 422);
        }

        return response()->json([
            'quantity' => $newQty,
            'total' => $newTotal
        ]);
    }

    public function checkout(Request $request)
    {
        $cartData = $request->input('cart');
        $user = auth()->user();
        $total = 0;
        $items = [];
        $hasPremium = false; // Flag pour détecter le premium

        foreach ($cartData as $id => $item) {
            $product = Product::findOrFail($id);
            $total += ($product->price * $item['quantity']);

            // Détection du premium
            $isThisProductPremium = $product->isPremium; // Vérifiez le nom exact de votre colonne (isPremium ou is_premium)
            if ($isThisProductPremium) {
                $hasPremium = true;
            }

            // Préparation des données pivot
            $items[$id] = [
                'quantity' => $item['quantity'],
                'status'   => $isThisProductPremium ? 'pending' : 'validated'
            ];
        }

        // Vérifications de sécurité
        if ($total > 2000) {
            return response()->json(['message' => 'Le montant total dépasse la limite de 2000 Tokens.'], 422);
        }

        if ($user->tokens < $total) {
            return response()->json(['message' => 'Votre solde est insuffisant.'], 422);
        }

        return DB::transaction(function () use ($user, $total, $items, $hasPremium) {
            $order = Order::create([
                'user_id' => $user->id,
                'status'  => $hasPremium ? 'waiting' : 'approved',
            ]);

            $order->products()->attach($items);

            $user->tokens -= $total;
            $user->save();

            return response()->json([
                'message' => $hasPremium ? 'Demande envoyée au manager' : 'Commande validée',
                'redirect' => route('store.index'),
                'keep_cart' => $hasPremium 
            ]);
        });
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
