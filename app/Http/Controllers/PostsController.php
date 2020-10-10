<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{



    // 投稿一覧画面
    public function index() {
        // テーブルから全件取得
        $posts = Post::all();

        // viewの指定
        return view('posts.index')->with('posts', $posts);
    }




    // 投稿 詳細ページ
    public function show($id) {
        // PostsテーブルからIDカラムを探す
        $post = Post::findOrFail($id);

        // viewの指定
        return view('posts.show')->with('post', $post);
    }




    // 新規 投稿ページ
    public function new(Request $request, Post $post) {
        // viewの指定
        return view('posts.new')->with('post', $post);
    }




    // 新規投稿ページの作成アクション
    public function create(Request $request) {
        // 新しい投稿を保存する宣言
        $post = new Post();

        // DBのタイトルに入力された値を代入
        $post->title = $request->title;

        // DBのコンテンツに入力された値を代入
        $post->content = $request->content;

        // postsテーブルに保存
        $post->save();

        // 一覧画面にリダイレクト
        return redirect('/posts/index');
    }



    public function edit($id) {
        $post = Post::findOrFail($id);

        return view('posts.edit')->with('post', $post);
    }



    public function update(Request $request, $id) {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect('/posts/index');

    }

    public function destroy($id) {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('posts/index');

    }
}
