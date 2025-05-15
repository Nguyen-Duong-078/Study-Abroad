@extends('client.layouts.master')
@section('title', 'Danh sách bài viết')
@section('content')
 <div class="page-hero-area _relative" style="background-image: url({{ asset('assets/client/img/bg/page-bg.png') }});">
  <div class="container">
    <div class="row">
     <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto text-center">
                    <div class="page-hero-hadding">
                        <h1>Bài Viết </h1>
                        <div class="space16"></div>
                        <div class="page-hero-p">
                            <a href="/">Trang chủ</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Bài Viết</p>
                        </div>
                    </div>
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
<div class="blog4 sp3 _relative" id="blog" style="background-color: #F6F6F6;">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto text-center">
                <div class="hadding4">
                    <span class="font-f-2" data-aos="fade-up" data-aos-duration="700">Bài Viết & Chia Sẻ</span>
                    <div class="space16"></div>
                    <h1 class="font-f-4" data-aos="fade-up" data-aos-duration="900">Bài viết mới nhất</h1>
                </div>
            </div>
        </div>
        <div class="space30"></div>
        <div class="row">
            @foreach($posts as $post)
                <div class="col-lg-4">
                    <div class="blog4-box" data-aos="fade-up" data-aos-duration="700">
                        <div class="blog4-img-box _relative">
                            <div class="blog4-img img100">
                               <div style="width: 100%; height: 250px; overflow: hidden; border-radius: 10px;">
    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}"
         style="width: 100%; height: 100%; object-fit: cover;">
</div>
                            </div>
                            <div class="blog4-date">
                                <a href="#" class="font-f-4">{{ $post->created_at->format('d') }}</a>
                                <div class="space5"></div>
                                <p class="font-f-4">{{ $post->created_at->format('M') }}</p>
                            </div>
                        </div>
                        <div class="hadding4 blog4-hadding">
                            <div class="blog4-tags">
                                <a href="#" class="font-f-2"><img src="{{ asset('assets/client/img/icons/blog4-icon1.svg') }}" alt="">{{ $post->category->name ?? 'Chưa phân loại' }}</a>
                            </div>
                            <div class="space16"></div>
                            <h4>
                                <a href="{{ route('client.posts.show', $post->id) }}" class="font-f-4">{{ $post->title }}</a>
                            </h4>
                            <div class="space16"></div>
                            <p class="limit-line">{{ Str::limit($post->summary, 150) }}</p>
                            <div class="space24"></div>
                            <a class="service4-learn-more font-f-2" href="{{ route('client.posts.show', $post->id) }}">
                                Xem Thêm <span><i class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="space40"></div>
        <div class="row">
            <div class="col-lg-12 text-center">
                {{ $posts->links('pagination::bootstrap-5') }}
            </div>
        </div>
        <div class="space40"></div>

    </div>

</div>

@endsection
