<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $items = [
            'ipad',
            'iphone'
        ];
    
        return view('welcome', [
            'items' => $items
        ]);
    }

    public function hello() {
        return view('hello');
    }

    public function contact() {
        return view('contact');
    }
}
