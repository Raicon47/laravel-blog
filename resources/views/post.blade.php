@include('inc.nav')


<div class="col-md-8 mx-auto p-2">
    <h1 class="fw-bold text-success">{{$post->title}}</h1>
    <p class="mt-2">{{$post->created_at->diffForHumans()}}</p> 
    <button type="button" class="btn btn-light bg-white shadow position-relative my-2">
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            {{$post->views->count()}}+
          <span class="">views</span>
        </span>
      </button>
 <img src="{{$post->featured_image}}" class="img-thumbnail" alt="">
  <p>{!! $post->body !!}</p>
</div>

@include('inc.footer')