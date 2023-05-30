<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        return view('home', [
            "highlight" => Post::orderBy('rating_count', 'desc')->first(),
            "latests" => Post::orderBy('date', 'desc')->take(4)->get(),
            "posts" => Post::all()
        ]);
    }
    public function show($id){
        return view('detail', [
            "post" => Post::find($id)
        ]);
    }
}
