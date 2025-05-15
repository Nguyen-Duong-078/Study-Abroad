@extends('client.layouts.master')
@section('content')
    <!--=====pages hero start=======-->
    <div class="page-hero-area _relative" style="background-image: url({{ asset('assets') }}/client/img/bg/page-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto text-center">
                    <div class="page-hero-hadding">
                        <h1>{{ $school->english_name }}</h1>
                        <div class="space16"></div>
                        <div class="page-hero-p">
                            <a href="/">Trang chủ</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>{{ $school->english_name }}</p>
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


    <!--=====service details start=======-->

    <div class="service-details-all">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="sidebar-all-content">
                        <article>
                            <div class="hadding2">
                                <div class="space24"></div>
                                <p>» Tên Tiếng Hàn: {{ $school->korean_name }}</p>
                                <p>» Tên Tiếng Anh: {{ $school->english_name }}</p>
                                <p>» Năm Thành Lập: {{ $school->year_of }}</p>
                                <p>» Số Lượng Sinh Viên: {{ $school->number_of_students }}</p>
                                <p>» Học Phí: {{ $school->tuition }}</p>
                                <p>» Ký Túc Xá: {{ $school->dormitory }}</p>
                                <p>» Địa Chỉ: {{ $school->address }}</p>
                                <p>» Website: <a href="{{ $school->website }}">{{ $school->website }}</a></p>
                                <div class="space24"></div>
                            </div>
                        </article>
                        <article>
                            <div class="hadding2">
                                <img src="{{ Storage::url($school->img_thumbnail) }}" alt="">
                                <p class="text-center">{{ $school->under }}</p>
                            </div>
                            <div class="space24"></div>
                            <div class="hadding2">
                                <h1>{{ $school->korean_name }}</h1>
                                <div class="space16"></div>
                                <p>{!! $school->content !!}</p>
                            </div>
                            <div class="space24"></div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    {{-- <div class="countries sp4">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="hadding2">
                        <span>Countries</span>
                        <div class="space16"></div>
                        <h1>Checkout More Countries</h1>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="countrie3-box">
                        <div class="countrie3-img img100 img5">
                            <img src="{{ asset('assets') }}/client/img/image/countrie3-img1.png" alt="">
                        </div>
                        <div class="countrie3-hadding">
                            <h2><a href="#" class="weight-600">United States</a></h2>
                            <div class="space16"></div>
                            <p>Welcome to the United States, a land of diverse landscapes, cultures, and experiences.</p>
                            <div class="space16"></div>
                            <a href="#" class="w-learn-more">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="countrie3-box">
                        <div class="countrie3-img img100 img5">
                            <img src="{{ asset('assets') }}/client/img/image/countrie3-img2.png" alt="">
                        </div>
                        <div class="countrie3-hadding">
                            <h2><a href="#" class="weight-600">
                                    Australia</a></h2>
                            <div class="space16"></div>
                            <p>Welcome to the United States, a land of diverse landscapes, cultures, and experiences.</p>
                            <div class="space16"></div>
                            <a href="#" class="w-learn-more">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="countrie3-box">
                        <div class="countrie3-img img100 img5">
                            <img src="{{ asset('assets') }}/client/img/image/countrie3-img3.png" alt="">
                        </div>
                        <div class="countrie3-hadding">
                            <h2><a href="#" class="weight-600">Spain</a></h2>
                            <div class="space16"></div>
                            <p>Welcome to the United States, a land of diverse landscapes, cultures, and experiences.</p>
                            <div class="space16"></div>
                            <a href="#" class="w-learn-more">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}

     <div class="cta2" style="background-color: #462ab4;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="cta2-hadding2">
                                <h1>Chúng tôi cam kết làm cho quá trình xin thị thực của bạn
                                </h1>
                                <div class="space16"></div>
                                <p>M.I.M không chỉ Đào Tạo; họ thực sự quan tâm đến sự thành công của khách hàng.
                                    Chuyên gia tư vấn của tôi không chỉ giúp tư vấn.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="cta2-form">

                               <a href="/lien-he"><button class="theme-btn9 cta2-button font-f-7">Tư Vấn Ngay</button></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
