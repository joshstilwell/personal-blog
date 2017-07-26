<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() //controller action
    {
    	return view('posts.index');
    }
}
