<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    //
    public function index() {
        // テーブルから全件取得
        $posts = Post::all();

        // viewの指定
        return view('posts.index')->with('posts', $posts);
    }

    public function show($id) {
        $post = Post::findOrFail($id);

        // viewの指定
        return view('posts.show')->with('post', $post);
    }

    public function new(Request $request, Post $post) {
        return view('posts.new')->with('post', $post);
    }

    public function create(Request $request) {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect('/posts/index');

    }
}
