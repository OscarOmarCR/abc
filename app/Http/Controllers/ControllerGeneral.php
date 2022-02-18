<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerGeneral extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function aboutUs(){
        return view('aboutUs');
    }

    public function contactUs(){
        return view('contactUs');
    }

    public function ourServices(){
        return view('ourServices');
    }
}
