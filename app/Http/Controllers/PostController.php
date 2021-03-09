<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index ()
    {
    	$posts = Post::all();

        return view('articles')->with('posts', $posts);
    }    

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required',
    		'content' => 'required',
    	]);

    	$post = new Post();

    	$post->title = $request->input('title');
    	$post->content = $request->input('content');

    	$post->save();

    	return redirect('/articles')->with('message', 'Successfully saved');

    }
}
?>