<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Order;
use App\Models\Order_Product;
use App\Models\User;
use Illuminate\Http\Request;

use function Pest\Laravel\get;
class ProductValidatedController extends Controller
{
    //

    public function show()
    {
        $orderProduct = Order_Product::with(['order.user', 'product'])
            ->where('product_id', TRUE)
            ->where('status', 'pending')
            ->get();

        return view('manager.validated', compact('orderProduct'));
    }
}
