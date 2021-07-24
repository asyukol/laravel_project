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
        if (Session::get('role')=='admin') {
            $users = DB::table('users')->select('id', 'name', 'email', 'password')->get();
            return view('adminPage', compact('users'));
        }
        else
            return redirect('/home');
    }

    public function deleteUserView()
    {
        if (Session::get('role')=='admin')
            return view('adminDelete');
        else
            return redirect('/home');
    }
    public function editUserView()
    {
        if (Session::get('role')=='admin')
            return view('adminEdit');
        else
            return redirect('/home');
    }

    public function deleteUser(Request $request)
    {
       DB::table('users')->delete($request->id);
       return redirect('/admin');
    }
    public function editUser(Request $request)
    {
        $newPass=$request->password;
        $userId=$request->id;
        DB::table('users')
            ->where('id', $userId)
            ->update(['password' => $newPass]);
        return redirect('/admin');
    }

}
