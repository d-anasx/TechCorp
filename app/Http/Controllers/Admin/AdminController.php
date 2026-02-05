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
     $users = User::all()->where('role_id',3);
    //  the role_id = 3 is the employee
     $emoloyees= User::where('role_id',3)->count();
     //  the role_id = 2 is the manager
     $managers=User::where('role_id',2)->count();
      //  the role_id = 1 is the admin
     $admin=User::where('role_id',1)->count();

     $total=User::count();


     return  view('/admin/users', compact('users', 'emoloyees','managers','total','admin'));
    }

    public function refuse(User $user){
    $user->update([
        'statu'=>'refuse',
                  ]);


        return redirect()->route('users.index');

    }
        public function accept(User $user){

      $user->update([
        'statu'=>'accept',
      ]);


        return redirect()->route('users.index');

    }


}








