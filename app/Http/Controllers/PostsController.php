<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index() // controller action
    {
    	$posts = Post::latest()->get(); // order posts by newest
    	return view('posts.index', compact('posts'));
    }

    public function show(Post $post) 
    {
    	return view('posts.show', compact('post'));
    }

    public function create() 
    {
    	return view('posts.create');
    }

    public function store() 
    {
    	// $post = new Post;

    	// $post->title = request('title');
    	// $post->body = request('body');

    	// $post->save();

    	$this->validate(request(), [
    		'title' => 'required',
    		'body' => 'required'
    		]);

    	Post::create(request(['title', 'body']));

    	return redirect('/');
    }
}
