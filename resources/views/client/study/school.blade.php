@extends('client.layouts.master')
@section('content')
    <!--=====pages hero start=======-->

    <div class="page-hero-area _relative" style="background-image: url({{ asset('assets') }}/client/img/bg/page-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto text-center">
                    <div class="page-hero-hadding">
                        <h1>School</h1>
                        <div class="space16"></div>
                        <div class="page-hero-p">
                            <a href="/">Trang Chủ</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>School</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="page-hero-element1 aniamtion-key-2"
            src="{{ asset('assets') }}/client/img/shapes/page-header-element1.svg" alt="">
        <img class="page-hero-element2 aniamtion-key-3"
            src="{{ asset('assets') }}/client/img/shapes/page-header-element2.svg" alt="">
        <img class="page-hero-element3 aniamtion-key-1"
            src="{{ asset('assets') }}/client/img/shapes/page-header-element1.svg" alt="">
        <img class="page-hero-element4 aniamtion-key-2"
            src="{{ asset('assets') }}/client/img/shapes/page-header-element2.svg" alt="">
    </div>

    <!--=====pages hero end=======-->


    <!--=====blog post start=======-->

    <div class="blog-post-all sp3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="single-blog-post">
                        <div class="blog-post-img img100i img5">
                            <img src="{{ Storage::url($new->img_thumbnail) }}" alt="">
                        </div>
                        <div class="space16"></div>
                        <ul class="blog-post-icons">
                            <li><a href="#"><img src="{{ asset('assets') }}/client/img/icons/blog-post-icon1.svg"
                                        alt="">{{ $new->created_at->format('H:i | d/m/Y') }}
                                </a></li>
                        </ul>
                        <div class="space16"></div>
                        <div class="hadding2">
                            <h3><a href="{{ route('school.show', $new->id) }}">{{ $new->english_name }}</a></h3>
                            <div class="space8"></div>
                            <p>{{ \Illuminate\Support\Str::limit($new->description, 106) }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <div class="blog-post-img img5 img100z">
                            <img src="{{ Storage::url($random->img_thumbnail) }}" alt="">
                        </div>
                        <div class="space16"></div>
                        <ul class="blog-post-icons">
                            <li><a href="#"><img src="{{ asset('assets') }}/client/img/icons/blog-post-icon1.svg"
                                        alt="">{{ $random->created_at->format('H:i | d/m/Y') }}</a></li>
                        </ul>
                        <div class="space16"></div>
                        <div class="hadding2">
                            <h3><a href="{{ route('school.show', $random->id) }}">{{ $random->english_name }}</a></h3>
                            <div class="space8"></div>
                            <p>{{ \Illuminate\Support\Str::limit($random->description, 130) }}</p>
                        </div>
                    </div>
                </div>

                @foreach ($schools as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post single-blog-post2">
                            <div class="blog-post-img img100s">
                                <img src="{{ Storage::url($item->img_thumbnail) }}" alt="">
                            </div>
                            <div class="hadding2 blog-post-hadding">
                                <h3><a href="{{ route('school.show', $item->id) }}">{{ $item->english_name }}</a></h3>
                                <div class="space8"></div>
                                <p>{{ \Illuminate\Support\Str::limit($item->description, 130) }}</p>
                                <div class="blog-post-border"></div>
                                <ul class="blog-post-icons">
                                    <li><a href="#"><img
                                                src="{{ asset('assets') }}/client/img/icons/blog-post-icon1.svg"
                                                alt="">{{ $random->created_at->format('H:i | d/m/Y') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="space40"></div>
            {{ $schools->links() }}
            {{-- <div class="row">
                <div class="col-12 m-auto">
                    <div class="theme-pagination text-center">
                        <ul>
                            <li><a href="#"><i class="fa-solid fa-angles-left"></i></a></li>
                            <li><a class="active" href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li>...</li>
                            <li><a href="#">12</a></li>
                            <li><a href="#"><i class="fa-solid fa-angles-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>


    <!--=====blog post end=======-->

    <!--=====cta start=======-->

    <div class="cta2" style="background-color: #13AAA1;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="cta2-hadding2">
                        <h1>Chúng tôi cam kết làm cho quá trình xin du học của bạn</h1>
                        <div class="space16"></div>
                        <p>Visa Consulting không chỉ xử lý giấy tờ; họ thực sự quan tâm đến sự thành công của khách hàng.
                            Chuyên gia tư vấn của tôi không chỉ hỗ trợ tư vấn xin du học.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cta2-form">
                        <div class="cta2-input">
                            <input type="Enter Your Email" placeholder="Nhập địa chỉ Email">
                        </div>
                        <button class="theme-btn5 cta2-button font-f-7">Đăng ký ngay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====cta end=======-->
@endsection
