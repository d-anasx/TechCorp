<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class AdminController extends Controller
{
    public function index()
    {
        // mohamed : i used eloquent instaed of query builder because we cant send the user object while deleting a user because(it is stdclass object type)
     $users = user::all();

     return view('users', compact('users'));
    }
    public function destroy(User $user){
        $user->delete();
        return redirect(view('users'));

    }

    


   
}
