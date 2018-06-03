<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    //
    function index()
    {

    }

    function create()
    {

        return view('sessions.create');
    }

    function destroy()
    {
        auth()->logout();
        return redirect('/');


    }

    function store()
    {
        // attempt to authenticate the user

        if (! auth()->attempt(request(['email', 'password']))) {
            //if you can't send them back
            return back()->withErrors([
                'message' => 'Cannot log you in bro... Try again!'
            ]);
        }

            //If you can, sign them in!


            // redirect to forms page


                return redirect('/forms');





        }
    }


