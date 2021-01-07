<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){
        $comics = config('comics');
        // dd($comics);
        
        return view('home', compact('comics'));
    }
}
