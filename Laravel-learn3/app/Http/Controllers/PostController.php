<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = [
            (object) ['title' => 'title1', 'body' => 'body1'],
            (object) ['title' => 'title2', 'body' => 'body2'],
            (object) ['title' => 'title3', 'body' => 'body3'],
        ];

        return view('posts.index', ['posts' => $posts]); //->with('posts', Post::getAllPosts());
    }

    public function index2()
    {
        $posts = [
            (object) ['title' => 'title1', 'body' => 'body1'],
            (object) ['title' => 'title2', 'body' => 'body2'],
            (object) ['title' => 'title3', 'body' => 'body3'],
        ];

        return view('posts.index2', ['posts' => $posts]);
    }









    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //入力データのバリデーション
        $request->validate([
            'image' => 'required|image',
            'caption' => 'nullable|string|max:255',
        ]);

        //画像の保存
        $path = $request->file('image')->store('posts', 'public');

        // //データベースに保存
        // $post = new Post();
        // $post->image = $path;
        // $post->caption = $request->caption;
        // $post->save();

        // return redirect()->route('posts.index');

        Post::createPost($request->all());

        return response()->json([
            'message' => '画像が投稿されました',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
