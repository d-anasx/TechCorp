<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Order;
use App\Models\Order_Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ProductValidatedController extends Controller
{
    public function waiting()
    {
        $manager = Auth::user();

        $orders = Order::with(['user', 'products'])
            ->where('status', 'waiting')
            ->whereHas('user', function ($query) use ($manager) {
                $query->where('departement_id', $manager->departement->id);
            })
            ->get();

        return view('manager-dashboard', compact('orders'));
    }

    public function approve($id)
    {
        $manager = Auth::user();
        $order = Order::findOrfail($id);

        foreach ($order->products as $product) {
            $order->products()->updateExistingPivot(
                $product->id,
                ['status' => 'validated']
            );
        }



        $order->update([
            'status' => 'approved'
        ]);

        return redirect()->back()->with('success', 'Order approved successfully');
    }
    public function reject($id)
    {
        $manager = Auth::user();

        $order = Order::with('user', 'products')
            ->where('id', $id)
            ->whereHas('user.departement', function ($query) use ($manager) {
                $query->where('id', $manager->departement->id);
            })
            ->firstOrFail();

        DB::transaction(function () use ($order) {

            $user = $order->user;
            $products = $order->products;
            $order->update(['status' => 'rejected']);
            $user->tokens += $order->total_price;
            $user->save();
            foreach ($products as $product) {
                $product->quantity += $product->pivot->quantity;
                $product->save();
            }
        });


        return redirect()->back()->with('success', 'Order rejected successfully');
    }
    // public function order()
    // {
    //     $orders = Order::with('user:id,name')
    //         ->where('status', 'waiting')
    //         ->get();
    //     return view('manager-dashboard', compact('orders'));
    // }
}
