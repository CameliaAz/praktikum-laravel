<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        $breadcrum = (object)[
            'title' => 'Selamat Datang',
            'list' => ['Home','Welcome']
        ];

        $activeMenu = 'dashboard';

        return view('welcome',['breadcrumb' => $breadcrum, 'activeMenu' => $activeMenu]);
    }
}
