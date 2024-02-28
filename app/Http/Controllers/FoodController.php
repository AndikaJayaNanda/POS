<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function food() {
        return view('FB');
    }
    public function beauty() {
        return view('BH');
    }
    public function home() {
        return view('HC');
    }
    public function baby() {
        return view('BK');
    }
}
