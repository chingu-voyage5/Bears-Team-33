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
        $randomNum = rand();
//        return view('forms/index')->with('randomNum', $randomNum);
//        return view('forms/index', compact('randomNum'));
        return view('forms/index', [
            'randomNum' => $randomNum
        ]);
    }
    function create(){
        $data = [
            'john', 'doe'
        ];
        return view('forms/create')->with('data', json_encode($data));
    }
}