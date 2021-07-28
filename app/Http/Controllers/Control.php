<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Control extends Controller
{
    public function home(){
        return view('home');
    }

    public function contact(){
        return view('contact');
    }

    public function lien2(){
        return view('lien2');
    }
}
