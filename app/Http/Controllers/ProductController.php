<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{



    public function products()
    {
        $products = Product::all();
        return view('admin-products', compact('products'));
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('adminproducts');
    }
    public function store(Request $request)
    { 
        $request->isPremium = (int) $request->isPremium;
        $request['photo_path'] = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTndc60D3vyCFZIbNLbynSmxtgRWYRlqOBMCQ&s';
        Product::create($request->all());
        return redirect()->route('adminproducts');
    }



    public function edit($id) {
    
        $product = Product::find($id);
        return view('update-product', compact('product'));
    }
   
    public function update(Request $request, $id)
    {

        $product = Product::find($id);
        $product->update($request->all());

        return redirect()->route('adminproducts');
    }

}
