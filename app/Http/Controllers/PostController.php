<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post): View
    {
        return view('posts.view', compact('post'));
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(CreatePostRequest $request): RedirectResponse
    {
        Post::create($request->validated());
        return redirect()->route('posts.index')->withSuccess(__('Post has been created successfully'));
    }
}
