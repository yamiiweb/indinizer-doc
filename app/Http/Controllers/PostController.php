<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($category, $slug)
    {
        // get the data
        if ($post = Post::where('slug', $slug)->first()) {
            // render the View
            return view('post')->with('post', $post);
        } else {
            return abort(404);
        }
    }
}
