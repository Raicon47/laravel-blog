<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- style  --}}
        <link rel="stylesheet" href="{{mix('css/app.css')}}">

        {{-- js  --}}
        <script src="{{mix('js/app.js')}}" defer></script>

 
</head>
<style>
  body {
    /* background: black; */
    font-family: "Roboto", sans-serif;
  }
</style>
<body class="antialiased">

  <header class="blog-header bg-warning shadow lh-1 py-3">
    <div class="container">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          <a class="link-secondary text-decoration-none fw-bold text-dark" href="/">Laravel Blog</a>
        </div>
        <div class="col-4 text-center">
          <a class="text-muted h-1" href="">Subscribe</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <a class="btn btn-sm btn-dark" href="#">Purchase Books</a>
        </div>
      </div>
    </div>
  </header>

    <div class="container">
       

        
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
              @foreach ($topics as $topic)
              <a class="p-2 link-secondary text-dark" href="{{route('topic', $topic->slug)}}">{{$topic->name}}</a>
              @endforeach
            </nav>
          </div>
        </div>