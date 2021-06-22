<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $title = 'Beranda';
        return view('layout.beranda',compact('title'));
    }
    public function home()
    {
        $title = 'Home';
        return view('home',compact('title'));
    }
}
