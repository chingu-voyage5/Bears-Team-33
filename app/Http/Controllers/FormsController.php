<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        $data = [
            'john', 'doe'
        ];
        return view('forms/index')->with('data', json_encode($data));

    }


}
