@include('inc.nav')

<div class="container">

    <h1 class="fw-bold text-danger">{{$topic->name}}</h1>

    <hr>

    <div class="row my-5">

        @forelse ($topic->posts as $post)
        <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px;">
                <a href="{{route('show', $post->slug)}}">
                    <div class="row g-0">
                        <div class="col-md-4">
                          <img src="{{$post->featured_image}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title text-success">{{$post->title}}</h5>
                            <p class="card-text">{{$post->summary}}</p>
                          </div>
                        </div>
                      </div>
                </a>
              </div>
        </div>
        @empty
        <div class="alert alert-secondary">
            There are no posts for this topic yet
          </div>
        @endforelse
    </div>

</div>




@include('inc.footer')