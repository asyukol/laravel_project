<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class loginController extends Controller
{
    public function showLoginForm()
    {
        $user=Session::get('user');
        if ($user!=null)
            return redirect('/home');
        else
            return view('loginForm');
    }

    public function loginUser(Request $request)
    {
        $user=User::Where('email', $request->input('email'));
        //print_r($user->first()->password);
        if ($user->first()->password==$request->input('password')) {
            $request->session()->put('user', $user->first()->email);
            print_r('Вы вошли как: ');
            print_r($user->first()->name);
            print_r(' Почта: ');
            print_r(Session::get('user'));
            return redirect('/home');
        }
    }

    public function logoutUser(Request $request)
    {
        $request->session()->forget('user');
        return redirect('/home');
    }
}
