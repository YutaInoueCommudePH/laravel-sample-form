<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $input = [];

        if ($request->session()->has('_old_input')) {
            $input = $request->session()->get('_old_input');
        }

        return view('post.index')->with(compact('input'));
    }

    public function store(CreatePostRequest $request)
    {
        Post::create($request->data());

        return redirect()->route('post.complete');
    }

    public function complete()
    {
        return view('post.complete');
    }
}
