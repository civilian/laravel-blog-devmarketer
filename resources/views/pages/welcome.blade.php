@extends('main')

@section('title', '| Home')

@section('content')
  <div class="row">
      <div class="col-md-12">
          <div class="jumbotron">
            <h1>Welcome to my blog!</h1>
            <p class="lead">Thank you for visiting my blog that is done in laravel.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
          </div>
      </div>
  </div><!-- end of header .row -->

  <div class="row">
      <div class="col-md-8">
          <div class="post">
            @foreach($posts as $post)
              <h3>{{ $post->title }}</h3>
              <p>{{ substr($post->body, 0, 300) }} {{ strlen($post->body) > 300 ? '...' : ''}}</p>
              <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read more</a>
              <hr />
            @endforeach
          </div>
      </div>
      <div class="col-md-3 col-md-offset-1">
          <h2>Sidebar</h2>
      </div>
  </div>
@endsection
