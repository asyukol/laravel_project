<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Session;
class adminPageController extends Controller
{
    public function showAdminPage()
    {
        $userEmail=Session::get('user');
        $user=User::Where('email', $userEmail);
        if ($user->first()->role=='admin') {
            $users = DB::table('users')->select('id', 'name', 'email', 'password')->get();
            return view('adminPage', compact('users'));
        }
        else
            return redirect('/home');
    }
    public function deleteUser()
    {
        return view('adminPage');
    }
    public function editUser()
    {
        return view('adminPage');
    }
}
