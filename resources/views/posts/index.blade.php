@extends('template.layouts')

@section('content')
  <div class="icon">
    <h1>bon_92</h1>
    <h2>投稿一覧</h2>
  </div>

    @foreach ($posts as $post)
      <div class="card">
        <div class="card-body">
          <h5 class="card-title float-left">{{ $post->title }}</h5>
          <div class="d-flex">
            <a href="{{ action('PostsController@show', $post->id) }}" class="btn btn-outline-primary index-card-item">詳細</a>
          </div>
        </div>
      </div>
    @endforeach
@endsection
