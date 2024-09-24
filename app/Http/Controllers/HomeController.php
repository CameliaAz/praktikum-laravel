<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //isi controller
    public function index() {
        return view('welcome');
    }
    
}
