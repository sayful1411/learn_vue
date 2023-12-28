<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
       $posts =  Post::cursorPaginate(6);

       return view('index', compact('posts'));
    }
}
