<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    public function show($slug){

        $comics = config('comics');

        $comic = [];
        foreach ($comics as $item){
            $titleConverted = Str::slug($item['title'], '-');

            if($slug == $titleConverted){   
                $comic = $item;
                break;
            }
        }

        if(empty($comic)){
            abort(404);
        }

        return view('comic-detail', compact('comic'));
    }
}
