@extends('template.layouts')

@section('content')
<div class="icon">
  <h1>bon_92</h1>
  <h2>新規投稿</h2>
</div>

<form action="{{ action('PostsController@create', $post->id) }}" class="form-group" method="POST">
  {{ csrf_field() }}
  
  <div class="form-group">
    <label for="exampleInputEmail">タイトル</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">本文</label>
    <textarea class="form-control" name="content" cols="30" rows="10"></textarea>
  </div>
  
  <input type="submit" class="btn btn-outline-primary float-left mr-1" value="保存">
</form>

<a class="btn btn-outline-danger" href="{{ url('/posts/admin') }}">戻る</a>
@endsection
