<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //isi controller
    public function show($id, $name) {
        return view('user/profile', compact('id', 'name'));
    }
    
}
