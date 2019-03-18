<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function store(Request $request) 
    {
        $post =new Post([
            'title'=>$request->title,
            'body'=>$request->body,
            ]);
            $post->save( );
            return redirect()->back ();
    }
}

