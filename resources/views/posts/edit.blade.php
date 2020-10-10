@extends('template.layouts')

@section('content')
  <div class="icon">
    <h1>bon_92</h1>
    <h1>編集</h1>
  </div>


  <form action="{{ action('PostsController@update', $post->id) }}" method="POST">
    {{ csrf_field() }}

    <div class="form-group">
      <label for="exampleInputEmail">タイトル</label>
      <input type="text" class="form-control" name="title" value="{{ old('title', $post->title) }}">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">本文</label>
      <textarea class="form-control" cols="50" rows="10" name="content">{{ old('content', $post->content) }}</textarea>
    </div>
    
    <input class="btn btn-outline-primary d-flex" type="submit" value="保存">
  </form>

  <form action=""></form>
  <a href="{{ url('/posts/index') }}" class="btn btn-outline-danger">戻る</a>
@endsection