<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = User::find(auth()->user()->id);
        $products = Product::all();
        $orders = Order::where(['user_id' => $employee->id])->get();
        $validatedOrders = $orders->where('status', 'approved');
        return view('employee.index', compact('products', 'orders', 'validatedOrders', 'employee'));
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
    public function store(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $order = Order::where('user_id', auth()->user()->id)
            ->where('status', 'filling')->first();
        if ($order) {
            $pivotProduct = $order->products()
                ->where('product_id', $product->id)
                ->first();
            if ($pivotProduct) {
                // Product already in order → increment quantity
                $order->products()->updateExistingPivot(
                    $product->id,
                    ['quantity' => $pivotProduct->pivot->quantity + 1]
                );
            } else {
                $order->products()->attach($product->id, [
                    'quantity' => 1,
                    'status' => $product->is_premium ? 'pending' : 'validated',
                ]);
            }
            dd($order->products()->count());
            return redirect()->route('store.index')->with('success', 'Produit ajouté au panier');
        }
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'status' => 'filling',
        ]);
        $order->products()->attach($product->id, ['quantity' => 1, 'status' => $product->is_premium ? 'pending' : 'validated']);
        dd($order->products()->count());
        return redirect()->route('store.index')->with('success', 'Produit ajouté au panier');
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
