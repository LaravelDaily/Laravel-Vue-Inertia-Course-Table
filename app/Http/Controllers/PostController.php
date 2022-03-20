<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Post::class);
        $posts = PostResource::collection(Post::all());

        return inertia('Posts/Index', compact('posts'));
    }

    public function create()
    {
        $this->authorize('create', Post::class);
        return inertia('Posts/Create');
    }

    public function store(StorePostRequest $request)
    {
        $this->authorize('create', Post::class);
        Post::create($request->validated());

        return redirect()->route('posts.index')
            ->with('message', 'Post created successfully');
    }

    public function edit(Post $post)
    {
        $this->authorize('create', Post::class);
        return inertia('Posts/Edit', compact('post'));
    }

    public function update(Post $post, StorePostRequest $request)
    {
        $this->authorize('create', Post::class);
        $post->update($request->validated());

        return redirect()->route('posts.index')
            ->with('message', 'Post updated successfully');
    }

    public function destroy(Post $post)
    {
        $this->authorize('create', Post::class);
        $post->delete();

        return redirect()->route('posts.index')
            ->with('message', 'Post deleted successfully');
    }
}
