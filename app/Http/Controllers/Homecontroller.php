<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class HomeController extends Controller
{
    public function index(){
        $comics = config('comics');
        // dd($comics);


        
        // dd($slug);

        foreach($comics as $key => $comic){
            // titolo = slug
            $slug = Str::slug($comic['title'], '-');
            // aggiunger slug
            $comics[$key]['slug'] = $slug;
        }
        // dd($comics);

        
        return view('home', compact('comics'));
    }
}
