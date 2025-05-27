@extends('client.layouts.master')
@section('title', $post->title)

@section('content')
  <div class="page-hero-area _relative" style="background-image: url({{ asset('assets/client/img/bg/page-bg.png') }});">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 m-auto text-center">
        <div class="page-hero-hadding">
          <h1>{{ $post->title }}</h1>
          <div class="space16"></div>
          <div class="page-hero-p">
            <a href="/">Home</a>
            <span><i class="fa-solid fa-angle-right"></i></span>
            <p>{{ $post->title }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
     <img class="page-hero-element1 aniamtion-key-2"
            src="{{ asset('assets/client/img/shapes/page-header-element1.svg') }}" alt="">
        <img class="page-hero-element2 aniamtion-key-3"
            src="{{ asset('assets/client/img/shapes/page-header-element2.svg') }}" alt="">
        <img class="page-hero-element3 aniamtion-key-1"
            src="{{ asset('assets/client/img/shapes/page-header-element1.svg') }}" alt="">
        <img class="page-hero-element4 aniamtion-key-2"
            src="{{ asset('assets/client/img/shapes/page-header-element2.svg') }}" alt="">
</div>


      <!--=====pages hero end=======-->


     <!--=====blog details start=======-->

    <div class="blog-details sp3">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="blog-details-all">
          <article>
            <div class="img5 img100">
              <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}">
            </div>
            <div class="space24"></div>
            <ul class="blog-post-icons2">
              <li><a href="#"><img src="{{ asset('assets/client/img/icons/blog-details-main-icon1.svg') }}" alt="">Admin</a></li>
              <li><a href="#"><img src="{{ asset('assets/img/icons/blog-details-main-icon2.svg') }}" alt="">{{ $post->created_at->format('d M Y') }}</a></li>
              <li><a href="#"><img src="{{ asset('assets/img/icons/blog-details-main-icon3.svg') }}" alt="">{{ $post->category->name ?? 'Uncategorized' }}</a></li>
              <li><a href="#"><img src="{{ asset('assets/img/icons/blog-details-main-icon4.svg') }}" alt="">0 Comments</a></li>
            </ul>
            <div class="space16"></div>
            <div class="hadding2">
              <h2 style="line-height: 38px;">{{ $post->title }}</h2>
              <div class="space24"></div>
              <p>{{ $post->summary }}</p>
              <div class="space16"></div>
              <p>{!! (($post->content)) !!}</p>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</div>

     <!--=====blog details end=======-->

      <!--=====blog start=======-->

      <div class="blog sp3" style="background-color: #F2F5F5;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="hadding2">
                    <h1>Những bài viết liên quan</h1>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($relatedPosts as $related)
                <div class="col-lg-4">
                    <div class="space60"></div>
                    <div class="single-blog-post single-blog-post2">
                        <div class="blog-post-img img100">
                         <div class="blog4-img img100">
                               <div style="width: 100%; height: 250px; overflow: hidden; border-radius: 10px;">
    <img src="{{ asset('storage/' . $related->thumbnail) }}" alt="{{ $related->title }}"
         style="width: 100%; height: 100%; object-fit: cover;">
</div>
                            </div>
                        </div>
                        <div class="hadding2 blog-post-hadding">
                            <h3><a href="{{ route('client.posts.show', $related->id) }}">{{ $related->title }}</a></h3>
                            <div class="space8"></div>
                            <p>{{ \Illuminate\Support\Str::limit($related->summary, 100) }}</p>
                            <div class="blog-post-border"></div>
                            <ul class="blog-post-icons">
                                <li>
                                    <a href="#"><img src="{{ asset('assets/client/img/blog') }}" alt="">
                                        {{ $related->created_at->format('d M Y') }}
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


@endsection
