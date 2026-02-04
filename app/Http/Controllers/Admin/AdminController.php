<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index()
    {
     $users = DB::table('users')->get();

     return view('users', compact('users'));
    }
    public function destroy(User $user){
        $user->delete();
        return redirect(view('users'));

    }


}
