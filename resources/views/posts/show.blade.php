@extends('template.layouts')

@section('content')
  <div class="icon">
    <h1>bon_92</h1>
    <h2>投稿</h2>
  </div>

  <div class="card mb-5">
    <div class="card-body">
      <h5 class="card-title pb-5">{{ $post->title }}</h5>
      {{-- 本文（content）に改行を入れる --}}
      <p class="card-text">{!! nl2br(e($post->content)) !!}</p>
    
      <div class="d-flex" style="height: 36.4px">
        <a href="{{ url('/posts/index') }}" class="btn btn-outline-primary">戻る</a>
      </div>
    </div>
  </div>
@endsection

