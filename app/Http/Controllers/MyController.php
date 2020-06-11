<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class MyController extends Controller
{
    public function postRegister(Request $req)
    {
        $this->validate($req, [
            'name'=>'required|regex:/^[a-z ,.\'-]+$/i',
            'email'=>'required|regex:/\S+@\S+\.\S+/',
            'password'=>'required|confirmed|regex:/\S/'
        ],
        [
            'name.required' => 'Input your name',
            'name.regex' => 'Invalid name',
            'email.required' => 'Input your email',
            'email.regex' => 'Invalid email',
            'password.required' => 'Input your password',
            'password.confirmed'=>'Confirm the password',
            'password.regex' => 'Invalid password',
            'password.min'=>'Input at least 3 characters',
            'password_confirmation.required' => 'Input your password',
            'password_confirmation.regex' => 'Invalid password',
            'password_confirmation.min'=>'Input at least 3 characters'
        ]
        );

        return redirect()->route(back());
    }

    public function getPrimaryHome()
    {
        return view('primary.home');
    }


}
