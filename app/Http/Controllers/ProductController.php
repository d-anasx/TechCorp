<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{



    public function products()
    {

        $products = Product::all();
        $totalProducts = $products->count();
        $total_stock = Product::sum('quantity');
        $standard = Product::where('isPremium', 0)->count();
        $Premium = Product::where('isPremium', 1)->count();
        // dd($standard);
        return view('admin.admin-products', compact('products', 'totalProducts', 'total_stock', 'standard', 'Premium'));
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('adminproducts');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('photo_path')) {

            $path = $request->file('photo_path')->store('uploads', 'public');
            $data['photo_path'] = $path;

        }
        $data['isPremium'] = (int) $request->isPremium;
        Product::create($data);
        return redirect()->route('adminproducts');
    }
    public function edit($id)
    {

        $product = Product::find($id);
        return view('update-product', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        if ($request->hasFile('photo_path')) {
            $data['photo_path'] = $request->file('photo_path')->store('uploads', 'public');
        } 
        $product = Product::find($id);
        $product->update($data);
        return redirect()->route('adminproducts');
    }

     public function searchProduct($inputvalue) {
       $products = DB::table('products')
        ->where('name', 'LIKE', '%' . $inputvalue . '%')
        ->get();
        return response()->json($products); 
     }

}
