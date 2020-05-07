<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        return view('store');
    }
    
    public function pesan()
    {
        return view('pesan');
    }
    public function dekor()
    {
        return view('dekor');
    } 

}
