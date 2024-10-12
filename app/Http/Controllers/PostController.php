<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function inedx() {
        return view('post.index');
    }

    function handlePost(Request $request){
        dd($request->all());
    }
}
