<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function food() {
        return view('foodbeverages');
    }
    public function beauty() {
        return view('beautyhealth');
    }
    public function kid() {
        return view('babykid');
    }
    public function home() {
        return view('homecare');
    }   
}
