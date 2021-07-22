<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class registerController extends Controller
{
    public function showRegisterForm()
    {
        return view('registerForm');
    }



    public function registerUser(Request $request)
    {
        //print_r($request->input());
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->role=$request->role;
        $user->password=$request->password;
        if ($user->save())
            echo 'Регистрация успешна';

    }
}
