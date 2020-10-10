@extends('template.layouts')

@section('content')
  <div class="icon">
    <h1>bon_92</h1>
    <h2>投稿</h2>
  </div>

  <div class="card mb-5">
    <div class="card-body">
      <h5 class="card-title pb-5">{{ $post->title }}</h5>
    <p class="card-text">{{ safe_join($post->content->split("\n"),tag(":br")) }}</p>
      
      <div class="d-flex" style="height: 36.4px">
        <a href="{{ url('/posts/index') }}">戻る</a>
      </div>
    </div>
  </div>
@endsection

