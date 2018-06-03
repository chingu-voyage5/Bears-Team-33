<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    //

    function create(){
        return view('registration/create');
    }

    function store(){
        // validate the form

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        //create and save the user
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);


        //sign the user in

        auth()->login($user);

        //redirect to form page
        return redirect()->route('forms');
    }
}
