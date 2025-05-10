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
            (object) [
                'title' => '最初の投稿',
                'body' => 'これは、最初の投稿の本文です',
            ],
            (object) [
                'title' => '2番目の投稿',
                'body' => 'これは、2番目の投稿の本文です',
            ],
            (object) [
                'title' => '3番目の投稿',
                'body' => 'これは、3番目の投稿の本文です',
            ],
        ];

        //異なる書き方
        //return view('posts.index',['posts' => $posts,]);
        return view('posts.index')->with('posts', $posts);

        //return view('posts.index')->with('posts', Post::getAllPosts());
    }

    public function index2()
    {
        $posts = [
            (object) [
                'title' => '最初の投稿',
                'body' => 'これは、最初の投稿の本文です',
            ],
            (object) [
                'title' => '2番目の投稿',
                'body' => 'これは、2番目の投稿の本文です',
            ],
            (object) [
                'title' => '3番目の投稿',
                'body' => 'これは、3番目の投稿の本文です',
            ],
        ];

        //異なる書き方
        //return view('posts.index',['posts' => $posts,]);
        return view('posts.index2')->with('posts', $posts);
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
        $request->validate([
            'image' => 'required|image',
            'caption' => 'nullable|string|max:255',
        ]);

       // 画像の保存
       $path = $request->file('image')->store('posts', 'public');

       // データベースに保存
       //  $post = new Post();
       //    $post->image = $path;
       //    $post->caption = $request->caption;
       //    $post->save();

       Post::createPost($request->all());

       return response()->json([
        'message' => '画像が保存されました',
       ]);

       //return redirect()->route('posts.show', $post->id);
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
