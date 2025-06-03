@extends('client.layouts.master')
@section('content')
    <!--=====pages hero start=======-->
    <style>
        .search-form {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .input-group {
            display: flex;
            align-items: center;
            width: 100%;
            max-width: 500px;
            /* Adjust max-width for desired form width */
        }

        .search-input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 30px 0 0 30px;
            /* Rounded left edges */
            font-size: 16px;
            outline: none;
        }

        .search-btn {
            padding: 10px 20px;
            background-color: #462ab4;
            /* Change color to your preferred */
            color: #fff;
            border: none;
            border-radius: 0 30px 30px 0;
            /* Rounded right edges */
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .search-btn:hover {
            background-color: #3c1f94;
            /* Darker shade on hover */
        }

        .search-input:focus {
            border-color: #462ab4;
            /* Highlight border color when focused */
        }

        .search-btn:focus {
            outline: none;
            /* Remove outline on button focus */
        }

        .search-form {
            margin-bottom: 20px;
            /* Add some space below the form */
        }

        .search-input {
            margin-right: -1px;
            /* Remove space between input and button */
        }
    </style>
    <div class="page-hero-area _relative" style="background-image: url({{ asset('assets') }}/client/img/bg/page-bg.png);">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto text-center">
                    <div class="page-hero-hadding">
                        <h1>Trường Học</h1>
                        <div class="space16"></div>
                        <div class="page-hero-p">
                            <a href="/">Trang Chủ</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Trường Học</p>
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
                <div class="col-lg-7 m-auto text-center">
                    <div class="hadding4">
                        <span class="font-f-2" data-aos="fade-up" data-aos-duration="400">Trường Học</span>
                        <div class="space16"></div>
                        <h1 class="font-f-4" data-aos="fade-up" data-aos-duration="500">Các Trường Đại Học</h1>
                    </div>
                </div>
            </div>

            <form action="{{ route('schools.search') }}" method="GET" class="search-form">
                <div class="input-group">
                    <input type="text" name="query" placeholder="Tìm Kiếm Trường Đại Học"
                        value="{{ request()->query('query') }}" class="search-input" required>
                    <button type="submit" class="search-btn">Tìm Kiếm</button>
                </div>
            </form>
            <div class="space30"></div>
            <div class="row">
                @foreach ($schools as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post single-blog-post2">
                            <div class="blog-post-img img100s">
                                <img src="{{ Storage::url($item->img_thumbnail) }}" alt="">
                            </div>
                            <div class="hadding2 blog-post-hadding">
                                <h3><a href="{{ route('school.show', $item->slug) }}">{{ $item->english_name }}</a></h3>
                                <div class="space8"></div>
                                <p>{{ \Illuminate\Support\Str::limit($item->description, 130) }}</p>
                                <div class="blog-post-border"></div>
                                <ul class="blog-post-icons">
                                    <li><a href="{{ route('school.show', $item->slug) }}"><img
                                                src="{{ asset('assets') }}/client/img/icons/blog-post-icon1.svg"
                                                alt="">{{ $item->created_at->format('H:i | d/m/Y') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="space40"></div>
            {{ $schools->links('pagination::bootstrap-5') }}
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

    <!--=====cta end=======-->
@endsection
