<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SecondController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function showString()
    {
        return 'Hello from Second Controller';
    }

    public function getIndex(){
        // return view(view: 'welcome');
        return view('welcome');
    } 
}
