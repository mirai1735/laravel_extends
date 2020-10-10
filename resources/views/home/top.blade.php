@extends('template.layouts')

@section('content')
  <div class="top-main w-100 h-100 pt-0 position-absolute">
    <div class="main-content"> 
      <h3 class="text-center">Welcome To Our Web Site</h3>
      <h2 class="text-center pt-1">IT'S NICE TO MEET YOU</h2>
    </div>

    <div class="toplink d-flex pt-5 pb-3">
      <a class="btn d-block ml-auto mr-1 btn-outline-light" href="{{ url('#') }}">about</a>
      <a class="btn d-block mr-auto ml-1 btn-outline-light" href="{{ url('posts/index') }}">posts</a>
    </div>

    <div class="live mt-5 border-top w-75 ml-auto mr-auto">
      <p class="pt-5 mt-5 text-center">生きる事。
      <br>それは「日々」を告白していくことだろう。</p>
      <p class="by-yk text-right w-75 pb-5 mb-5">by y.kimura</p>
    </div>
  </div>
@endsection
