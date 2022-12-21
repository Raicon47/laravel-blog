
@include('inc.nav')


      <main class="container">
        <div class="p-4 p-md-5 mb-4 rounded alert alert-warning">
          <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Laravel Blog</h1>
            <p class="lead my-3">Hello, My name is Cyprian Jacob Nwaerema and i am a Laravel Developer.</p>
            <a href="" class="btn btn-dark">Contact Us</a>
            <a href="" class="btn btn-outline-dark">Hire Me</a>
          </div>
        </div>
      
        <div class="row mb-2">
         @foreach ($posts->take(2) as $post)
         <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-success">
                @foreach ($post->topic as $top)
                {{$top->name}}
                @endforeach
              </strong>
              <h3 class="mb-0 fw-bold text-warning">{{$post->title}}</h3>
              {{-- <div class="mb-1 text-muted">{{$post->created_at->diffForHumans()}}</div> --}}
              <p class="mb-auto text-muted">{{$post->summary}}</p>
              <a href="{{route('show', $post->slug)}}" class="stretched-link text-success">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="{{$post->featured_image}}" width="200" height="250" alt="">
            </div>
          </div>
        </div>
         @endforeach
        </div>
      
        <div class="row g-5">
          <div class="col-md-8">
            <hr>
            <article class="blog-post my-3">
              <h2 class="text-success">{{$index_post->title}}</h2>
              <blockquote class="blockquote">
                <p class="fst-italic text-muted">{{$index_post->summary}}</p>
              </blockquote>
              <p class="text-muted">{!!$index_post->body!!}</p>
            </article>
      
          </div>
      
          <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
              <div class="p-4">
                <h4 class="fst-italic text-danger">Archives</h4>
                <ol class="list-unstyled mb-0">
                  @foreach ($posts as $post)
                  <li><a href="#">{{$post->title}}</a></li>
                  @endforeach
                </ol>
              </div>
      
              <div class="p-4">
                <h4 class="fst-italic text-danger">Follow</h4>
                <ol class="list-unstyled">
                  <li><a href="#">GitHub</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Facebook</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      
      </main>


@include('inc.footer')