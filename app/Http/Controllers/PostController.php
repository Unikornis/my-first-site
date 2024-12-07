<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($post)
{
// return $post;
// return view('post', compact('post'));
$length = Post::getLength($post);
return view('post', compact('post', 'length'));
}

}
