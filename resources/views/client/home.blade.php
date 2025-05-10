@extends('client.layouts.master')
@section('content')
    <!--=====hero area start=======-->
    <div class="hero-area4 _relative">
        <div class="container">
            <div class="space80"></div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="main-hadding4">
                        <div class="main-span4">
                            <h1 class="font-f-4">Trao quyền cho ước mơ của bạn với dịch vụ tư vấn du học được thiết kế
                                riêng</h1>
                            <div class="space16"></div>
                            <p class="font-f-2">Duyệt đơn xin du học dễ dàng - Đối tác đáng tin cậy của bạn trong việc
                                Đạt được ước mơ của bạn Cho dù bạn đang theo đuổi giáo dục, phát triển sự nghiệp hay một
                                chương mới
                                ở một vùng đất xa lạ.</p>
                            <div class="space32"></div>
                            <a href="contact.html" class="theme-btn9 font-f-4">Đặt lịch tư vấn</a>
                            <a href="service.html" class="theme-btn10 font-f-4">Khám phá các lựa chọn Visa</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero4-all-images">
                        <div class="hero4-img1 aniamtion-key-2">
                            <img src="{{ asset('assets') }}/client/img/shapes/hero4-shape3.svg" alt="">
                        </div>

                        <div class="hero4-img2">
                            <img src="{{ asset('assets') }}/client/img/image/hero4-main-img.png" alt="">
                        </div>

                        <div class="hero4-img3 aniamtion-key-3">
                            <img src="{{ asset('assets') }}/client/img/shapes/hero4-shape1.svg" alt="">
                        </div>

                        <div class="hero4-img4 aniamtion-key-2">
                            <img src="{{ asset('assets') }}/client/img/shapes/hero4-shape2.svg" alt="">
                        </div>

                        <div class="hero4-img5 aniamtion-key-4">
                            <img src="{{ asset('assets') }}/client/img/shapes/hero4-shape4.svg" alt="">
                        </div>

                        <div class="hero4-im6">
                            <img src="{{ asset('assets') }}/client/img/shapes/hero4-shape5.svg" alt="">
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <img class="hero4-shape aniamtion-key-2" src="{{ asset('assets') }}/client/img/shapes/hero4-shape.svg"
            alt="">
    </div>

    <!--=====hero area end=======-->

    <!--=====about start=======-->

    <div class="about4 sp3" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about4-images-all">
                        <div class="about4-img1 aniamtion-key-2">
                            <img src="{{ asset('assets') }}/client/img/shapes/elipse-about4.svg" alt="">
                        </div>
                        <div class="about4-img2" data-aos="zoom-out" data-aos-duration="700">
                            <img src="{{ asset('assets') }}/client/img/image/about4-img1.png" alt="">
                        </div>
                        <div class="about4-img3" data-aos="zoom-out" data-aos-duration="900">
                            <img src="{{ asset('assets') }}/client/img/image/about4-img2.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hadding4 about4-hadding">
                        <span class="font-f-2" data-aos="fade-left" data-aos-duration="700">về công ty</span>
                        <div class="space16"></div>
                        <h1 class="font-f-4" data-aos="fade-left" data-aos-duration="900">Với nhiều năm kinh nghiệm trong
                            ngành tư vấn du học, chúng tôi hiểu rõ về Tư vấn. </h1>
                        <div class="space24"></div>
                        <p class="font-f-2" data-aos="fade-left" data-aos-duration="1100">Công ty TNHH Du học Quốc tế M.I.M.
                            mang sứ mệnh <b>kết nối tri thức – chắp cánh ước mơ du học</b> cho thế hệ trẻ Việt Nam. Chúng
                            tôi cam
                            kết đồng hành cùng học sinh và phụ huynh từ bước đầu định hướng ngành học, xử lý hồ sơ, xin visa
                            đến quá trình ổn định cuộc sống tại Hàn Quốc, với tinh thần <b>tận tâm – minh bạch – đúng
                                luật</b>.</p>
                        <div class="space20"></div>
                        <p class="font-f-2" data-aos="fade-left" data-aos-duration="700">Công ty TNHH Du học Quốc tế M.I.M.
                            được thành lập bởi chị Nguyễn Thị Loan – cựu du học sinh đã có hơn 8 năm sinh sống và học tập
                            tại Hàn Quốc, tốt nghiệp chuyên ngành Khách sạn – Du lịch tại trường đại học Daegu ( 대구대학교).
                            Trong suốt quá trình học tập, chị không chỉ tích lũy kiến thức chuyên môn mà còn có trải nghiệm
                            sâu sắc về cuộc sống thực tế của du học sinh Việt Nam tại Hàn.</p>
                        <div class="space32"></div>
                        <div class="" data-aos="fade-left" data-aos-duration="900">
                            <a href="/about" class="theme-btn9 font-f-4">Xem Thêm Về Chúng Tôi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====about end=======-->

    <!--=====service start=======-->

    <div class="service4 sp3 _relative" id="schools" style="background-color: #F6F6F6;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="hadding4">
                        <span class="font-f-2" data-aos="fade-up" data-aos-duration="700">Dịch vụ chúng tôi cung cấp</span>
                        <div class="space16"></div>
                        <h1 class="font-f-4" data-aos="fade-up" data-aos-duration="900">Global Visa Navigator Con đường của
                            bạn đến với chuyến du học liền mạch</h1>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
            <div class="row">
                @foreach ($schools as $item)
                    <div class="col-lg-4">
                        <div class="service4-box" data-aos="fade-up" data-aos-duration="700">
                            <div class="service4-img img5 img100s">
                                <img src="{{ Storage::url($item->img_thumbnail) }}">
                            </div>
                            <div class="hadding4">
                                <div class="space16"></div>
                                <h4><a href="service-details.html" class="font-f-4">{{ $item->english_name }}</a></h4>
                                <div class="space16"></div>
                                {{ \Illuminate\Support\Str::limit($item->description, 200) }}
                                <div class="space16"></div>
                                <a class="service4-learn-more font-f-2" href="{{ route('school.show', $item->id) }}">Xem
                                    Thêm
                                    <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="space40"></div>
            <div class="row">
                <div class="col-lg-12 m-auto text-center" data-aos="fade-up" data-aos-duration="700">
                    <a href="{{ route('schools') }}" class="theme-btn9 font-f-4">Xem toàn bộ trường học</a>
                </div>
            </div>
        </div>
        <img class="choose4-shape1 aniamtion-key-2" src="{{ asset('assets') }}/client/img/shapes/hom4-shape2.svg"
            alt="">
        <img class="choose4-shape2 aniamtion-key-2" src="{{ asset('assets') }}/client/img/shapes/hom4-shape1.svg"
            alt="">
    </div>

    <!--=====service end=======-->

    <!--=====choose start=======-->

    <div class="choose4 sp3"
        style="background-image: url({{ asset('assets') }}/client/img/shapes/elipse-about4.svg); background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hadding4 choose4-hadding">
                        <span class="font-f-2" data-aos="fade-right" data-aos-duration="700">Tại sao chọn
                            MIM</span>
                        <div class="space16"></div>
                        <h1 class="font-f-4" data-aos="fade-right" data-aos-duration="900">Bắt đầu một chuyến đi du học
                            là một bước quan trọng.</h1>
                        <div class="space24"></div>
                        <p class="font-f-2" data-aos="fade-right" data-aos-duration="1100">Với vô số lựa chọn
                            có sẵn, điều quan trọng là phải chọn một đối tác tư vấn du học phù hợp với mục tiêu của bạn
                            và có thể giải quyết được những phức tạp của quy trình.</p>
                        <div class="space30"></div>
                        <ul class="choose4-list font-f-2">
                            <li data-aos="fade-right" data-aos-duration="700"><img
                                    src="{{ asset('assets') }}/client/img/icons/check.svg" alt="">
                                <a href="about.html" class="font-f-4">Chuyên môn & Kinh nghiệm</a>
                            </li>
                            <li data-aos="fade-right" data-aos-duration="1100"><img
                                    src="{{ asset('assets') }}/client/img/icons/check.svg" alt="">
                                <a href="about.html" class="font-f-4">Cách tiếp cận cá nhân</a>
                            </li>
                            <li data-aos="fade-right" data-aos-duration="900"><img
                                    src="{{ asset('assets') }}/client/img/icons/check.svg" alt="">
                                <a href="about.html" class="font-f-4">Thành tích đã được chứng minh</a>
                            </li>
                            <li data-aos="fade-right" data-aos-duration="1200"><img
                                    src="{{ asset('assets') }}/client/img/icons/check.svg" alt="">
                                <a href="about.html" class="fotn-f-4">Dịch vụ toàn diện</a>
                            </li>
                        </ul>
                        <div class="space5"></div>
                        <a href="service.html" class="theme-btn9 font-f-4">Khám phá các tính năng của chúng tôi</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose4-images text-right choose4-images-all" data-aos="zoom-out"
                        data-aos-duration="700">
                        <div class="choose4-img-1 aniamtion-key-2">
                            <img src="{{ asset('assets') }}/client/img/shapes/choose4-img-shape1.svg" alt="">
                        </div>

                        <div class="choose4-img-2 img100 img5">
                            <img src="{{ asset('assets') }}/client/img/image/choose4-img.png" alt="">
                        </div>

                        <div class="choose4-img-3 aniamtion-key-2">
                            <img src="{{ asset('assets') }}/client/img/shapes/choose4-img-shape2.svg" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--========== Conversation-start ==========-->
    <div class="sp3 _relative" id="progress" style="background-color: #F6F6F6;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="d-flex align-items-start">
                        <div class="tab-content" id="v-pills-tabContent" data-aos="zoom-out" data-aos-duration="700">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="choose4-images text-left">
                                    <div class="prosess-shape aniamtion-key-2">
                                        <img src="{{ asset('assets') }}/client/img/shapes/choose4-img-shape1.svg"
                                            alt="">
                                    </div>
                                    <div class="choose4-img-2 img100 img5">
                                        <img src="{{ asset('assets') }}/client/img/image/prosess-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <div class="choose4-images text-left">
                                    <div class="prosess-shape aniamtion-key-2">
                                        <img src="{{ asset('assets') }}/client/img/shapes/choose4-img-shape1.svg"
                                            alt="">
                                    </div>
                                    <div class="choose4-img-2 img100 img5">
                                        <img src="{{ asset('assets') }}/client/img/image/choose4-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <div class="choose4-images text-left">
                                    <div class="prosess-shape aniamtion-key-2">
                                        <img src="{{ asset('assets') }}/client/img/shapes/choose4-img-shape1.svg"
                                            alt="">
                                    </div>
                                    <div class="choose4-img-2 img100 img5">
                                        <img src="{{ asset('assets') }}/client/img/image/prosess-img3.png"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hadding4" data-aos="fade-left" data-aos-duration="700">
                        <span class="font-f-2">Quy trình của chúng tôi hoạt động</span>
                        <div class="space16"></div>
                        <h1 class="font-f-4">Chúng tôi bắt đầu bằng việc hiểu mục tiêu của bạn</h1>
                    </div>
                    <div class="nav progress-list4 flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical" data-aos="fade-left" data-aos-duration="1100">
                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                            aria-selected="true">
                            <div class="progress-list-box">
                                <div class="progress-list-number">
                                    <h4><span class="font-f-4">01</span></h4>
                                </div>
                                <div class="hadding4 progress4-hadding">
                                    <h4 class="font-f-4">Tư vấn</h4>
                                    <div class="space8"></div>
                                    <p class="font-f-2">Chúng tôi bắt đầu bằng cách tìm hiểu mục tiêu, hoàn cảnh và
                                        sở thích của bạn.</p>
                                </div>
                            </div>
                        </button>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile" type="button" role="tab"
                            aria-controls="v-pills-profile" aria-selected="false">
                            <div class="progress-list-box">
                                <div class="progress-list-number">
                                    <h4><span class="font-f-4">02</span></h4>
                                </div>
                                <div class="hadding4 progress4-hadding">
                                    <h4 class="font-f-4">Chiến lược phù hợp</h4>
                                    <div class="space8"></div>
                                    <p class="font-f-2">Các chuyên gia của chúng tôi xây dựng chiến lược xin thị thực được
                                        cá nhân hóa nhằm
                                        tối đa hóa cơ hội thành công của bạn.</p>
                                </div>
                            </div>
                        </button>
                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-messages" type="button" role="tab"
                            aria-controls="v-pills-messages" aria-selected="false">
                            <div class="progress-list-box">
                                <div class="progress-list-number">
                                    <h4><span class="font-f-4">03</span></h4>
                                </div>
                                <div class="hadding4 progress4-hadding">
                                    <h4 class="fotn-f-4">Nộp và theo dõi</h4>
                                    <div class="space8"></div>
                                    <p class="font-f-2">Chúng tôi đảm bảo đơn đăng ký của bạn được nộp chính xác và đúng
                                        hạn.
                                        Chúng tôi cũng sẽ cập nhật cho bạn về tiến độ của đơn.</p>
                                </div>
                            </div>
                        </button>
                    </div>

                    <div class="space32"></div>
                    <div class="" data-aos="fade-left" data-aos-duration="700">
                        <a href="service.html" class="theme-btn9 font-f-4">Hãy theo dõi các bước của chúng tôi</a>
                    </div>
                </div>
            </div>
        </div>
        <img class="progress4-shape1 aniamtion-key-2" src="{{ asset('assets') }}/client/img/shapes/hom4-shape2.svg"
            alt="">
        <img class="progress4-shape2 aniamtion-key-2" src="{{ asset('assets') }}/client/img/shapes/hom4-shape1.svg"
            alt="">
    </div>

    <!--========== Conversation-end ==========-->

    <!--=====testimonial start=======-->

    <div class="testimonial4 sp3 _relative" id="testimonial" style="background-color: #181A1C;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="hadding4-w">
                        <span class="font-f-2" data-aos="fade-up" data-aos-duration="700">Lời chứng thực</span>
                        <div class="space16"></div>
                        <h1 class="font-f-4" data-aos="fade-up" data-aos-duration="1100">Khách hàng của chúng tôi yêu
                            thích trải nghiệm cửa hàng
                            xây dựng
                            tư vấn du học</h1>
                    </div>
                </div>
            </div>
            <div class="space60"></div>
            <div class="row">
                <div class="tes4-slider owl-carousel" data-aos="fade-up" data-aos-duration="800">

                    <div class="tes4-slider-single">
                        <div class="tes4-icon">
                            <img src="{{ asset('assets') }}/client/img/icons/tes4-commnet.svg" alt="">
                        </div>
                        <div class="space30"></div>
                        <div class="tes4-hadding">
                            <p class="font-f-2">"I had a fantastic experience with visafast consulting for my visa
                                <br>
                                application.”
                            </p>
                        </div>
                        <div class="space30"></div>
                        <div class="tes4-bottom-hadding">
                            <div class="tes4-bottom-img img50">
                                <img src="{{ asset('assets') }}/client/img/image/tes4-img1.png" alt="">
                            </div>
                            <div class="tes4-hadding-bottom">
                                <h6><a href="#" class="font-f-4">John Smith</a></h6>
                                <div class="space8"></div>
                                <p class="font-f-2">Germany</p>
                            </div>
                        </div>
                    </div>

                    <div class="tes4-slider-single">
                        <div class="tes4-icon">
                            <img src="{{ asset('assets') }}/client/img/icons/tes4-commnet.svg" alt="">
                        </div>
                        <div class="space30"></div>
                        <div class="tes4-hadding">
                            <p class="font-f-2">"I was overwhelmed by the complex visa requirements, but visafast is
                                turned entire process into breeze.</p>
                        </div>
                        <div class="space30"></div>
                        <div class="tes4-bottom-hadding">
                            <div class="tes4-bottom-img img50">
                                <img src="{{ asset('assets') }}/client/img/image/tes4-img2.png" alt="">
                            </div>
                            <div class="tes4-hadding-bottom">
                                <h6><a href="#" class="font-f-2">Maria Gonzalez</a></h6>
                                <div class="space8"></div>
                                <p class="font-f-2">Spain</p>
                            </div>
                        </div>
                    </div>

                    <div class="tes4-slider-single">
                        <div class="tes4-icon">
                            <img src="{{ asset('assets') }}/client/img/icons/tes4-commnet.svg" alt="">
                        </div>
                        <div class="space30"></div>
                        <div class="tes4-hadding">
                            <p class="font-f-2"> "I'm extremely grateful for the exceptional visa consulting services
                                provided by Visafast consulting.</p>
                        </div>
                        <div class="space30"></div>
                        <div class="tes4-bottom-hadding">
                            <div class="tes4-bottom-img img50">
                                <img src="{{ asset('assets') }}/client/img/image/tes4-img3.png" alt="">
                            </div>
                            <div class="tes4-hadding-bottom">
                                <h6><a href="#" class="font-f-4">James Patel</a></h6>
                                <div class="space8"></div>
                                <p class="font-f-2">United States</p>
                            </div>
                        </div>
                    </div>

                    <div class="tes4-slider-single">
                        <div class="tes4-icon">
                            <img src="{{ asset('assets') }}/client/img/icons/tes4-commnet.svg" alt="">
                        </div>
                        <div class="space30"></div>
                        <div class="tes4-hadding">
                            <p class="font-f-2">"I had a fantastic experience with visafast consulting for my visa
                                <br>
                                application.”
                            </p>
                        </div>
                        <div class="space30"></div>
                        <div class="tes4-bottom-hadding">
                            <div class="tes4-bottom-img img50">
                                <img src="{{ asset('assets') }}/client/img/image/tes4-img1.png" alt="">
                            </div>
                            <div class="tes4-hadding-bottom">
                                <h6><a href="#" class="font-f-4">James Patel</a></h6>
                                <div class="space8"></div>
                                <p class="font-f-2">Germany</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <img class="tes4-shape1 aniamtion-key-2" src="{{ asset('assets') }}/client/img/shapes/tes4-shape1.svg"
            alt="">
        <img class="tes4-shape2 aniamtion-key-2" src="{{ asset('assets') }}/client/img/shapes/tes4-shape2.svg"
            alt="">
        <img class="tes4-shape3" src="{{ asset('assets') }}/client/img/shapes/tes4-shape4.svg" alt="">
    </div>

    <!--=====testimonial end=======-->

    <!--=====team start=======-->

    <div class="team4 sp3">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="hadding4">
                        <span class="font-f-2" data-aos="fade-up" data-aos-duration="700">Đội ngũ của chúng tôi</span>
                        <div class="space16"></div>
                        <h1 class="font-f-4" data-aos="fade-up" data-aos-duration="900">Thành viên nhóm chuyên gia của
                            chúng tôi
                        </h1>
                    </div>
                </div>
            </div>
            <div class="space60"></div>
            <div class="row">

                <div class="col-lg-3">
                    <div class="space30"></div>
                    <div class="team4-box text-center" data-aos="fade-up" data-aos-duration="700">
                        <div class="team4-img-box">
                            <div class="team4-img img50 img100">
                                <img src="{{ asset('assets') }}/client/img/image/team4-img1.png" alt="">
                            </div>
                            <ul class="team4-icons">
                                <li class="team4-icon1"><a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </li>
                                <li class="team4-icon2"><a href="#"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li class="team4-icon3"><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li class="team4-icon4"><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="hadding4">
                            <h4><a href="team-details.html" class="font-f-4">Adman Michel</a></h4>
                            <div class="space8"></div>
                            <p class="font-f-2">Consultant</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">

                    <div class="team4-box text-center" data-aos="fade-up" data-aos-duration="900">
                        <div class="team4-img-box">
                            <div class="team4-img img50 img100">
                                <img src="{{ asset('assets') }}/client/img/image/team4-img2.png" alt="">
                            </div>
                            <ul class="team4-icons">
                                <li class="team4-icon1"><a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </li>
                                <li class="team4-icon2"><a href="#"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li class="team4-icon3"><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li class="team4-icon4"><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="hadding4">
                            <h4><a href="team-details.html" class="font-f-4">Andrea Zieme</a></h4>
                            <div class="space8"></div>
                            <p class="font-f-2">Consultant</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="space30"></div>
                    <div class="team4-box text-center" data-aos="fade-up" data-aos-duration="1100">
                        <div class="team4-img-box">
                            <div class="team4-img img50 img100">
                                <img src="{{ asset('assets') }}/client/img/image/team4-img3.png" alt="">
                            </div>
                            <ul class="team4-icons">
                                <li class="team4-icon1"><a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </li>
                                <li class="team4-icon2"><a href="#"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li class="team4-icon3"><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li class="team4-icon4"><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="hadding4">
                            <h4><a href="team-details.html" class="font-f-4">Michelle Schultz</a></h4>
                            <div class="space8"></div>
                            <p class="font-f-2">Consultant</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="team4-box text-center" data-aos="fade-up" data-aos-duration="1300">
                        <div class="team4-img-box">
                            <div class="team4-img img50 img100">
                                <img src="{{ asset('assets') }}/client/img/image/team4-img4.png" alt="">
                            </div>
                            <ul class="team4-icons">
                                <li class="team4-icon1"><a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </li>
                                <li class="team4-icon2"><a href="#"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li class="team4-icon3"><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li class="team4-icon4"><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="hadding4">
                            <h4><a href="team-details.html" class="font-f-4">Alexis Herzog DVM</a></h4>
                            <div class="space8"></div>
                            <p class="font-f-2">Consultant</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--=====team end=======-->

    <!--=====blog start=======-->
    <div class="blog4 sp3 _relative" id="blog" style="background-color: #F6F6F6;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="hadding4">
                        <span class="font-f-2" data-aos="fade-up" data-aos-duration="700">Blog & Bài viết</span>
                        <div class="space16"></div>
                        <h1 class="font-f-4" data-aos="fade-up" data-aos-duration="900">Điều hướng Quy trình
                            Nộp đơn
                            Visa: Hướng dẫn toàn diện</h1>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
            <div class="row">

                <div class="col-lg-4">
                    <div class="" data-aos="fade-up" data-aos-duration="700">
                        <div class="blog4-box">
                            <div class="blog4-img-box _relative">
                                <div class="blog4-img img100">
                                    <img src="{{ asset('assets') }}/client/img/blog/blog4-img1.png" alt="">
                                </div>
                                <div class="blog4-date">
                                    <a href="#" class="font-f-4">15</a>
                                    <div class="space5"></div>
                                    <p class="font-f-4">AUG</p>
                                </div>
                            </div>

                            <div class="hadding4 blog4-hadding">
                                <div class="blog4-tags">
                                    <a href="#" class="font-f-2"><img
                                            src="{{ asset('assets') }}/client/img/icons/blog4-icon2.svg"
                                            alt="">John
                                        Doe</a>
                                    <a href="#" class="font-f-2"><img
                                            src="{{ asset('assets') }}/client/img/icons/blog4-icon1.svg"
                                            alt="">Consulting</a>
                                </div>
                                <div class="space16"></div>
                                <h4><a href="blog-details.html" class="font-f-4">Demystifying Visa Types: A
                                        Comprehensive Guide</a></h4>
                                <div class="space16"></div>
                                <p class="font-f-2">Explain the importance of understanding different visa types.
                                    Briefly discuss the most common visa categories (tourist, student, work, etc.).</p>
                                <div class="space24"></div>
                                <a class="service4-learn-more font-f-2" href="blog-details.html">Read more <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="" data-aos="fade-up" data-aos-duration="900">
                        <div class="blog4-box">
                            <div class="blog4-img-box _relative">
                                <div class="blog4-img img100">
                                    <img src="{{ asset('assets') }}/client/img/blog/blog4-img2.png" alt="">
                                </div>
                                <div class="blog4-date">
                                    <a href="#" class="font-f-4">12</a>
                                    <div class="space5"></div>
                                    <p class="font-f-4">AUG</p>
                                </div>
                            </div>

                            <div class="hadding4 blog4-hadding">
                                <div class="blog4-tags">
                                    <a href="#" class="font-f-2"><img
                                            src="{{ asset('assets') }}/client/img/icons/blog4-icon2.svg"
                                            alt="">John
                                        Doe</a>
                                    <a href="#" class="font-f-2"><img
                                            src="{{ asset('assets') }}/client/img/icons/blog4-icon1.svg"
                                            alt="">Consulting</a>
                                </div>
                                <div class="space16"></div>
                                <h4><a href="blog-details.html" class="font-f-4">Navigating the Visa Application
                                        Maze:
                                        Step-by-Step Guide</a></h4>
                                <div class="space16"></div>
                                <p class="font-f-2">Break down the application journey into distinct steps: research,
                                    documentation, application form, interview, complexity of the visa application
                                    process.</p>
                                <div class="space24"></div>
                                <a class="service4-learn-more font-f-2" href="blog-details.html">Read more <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="" data-aos="fade-up" data-aos-duration="1100">
                        <div class="blog4-box">
                            <div class="blog4-img-box _relative">
                                <div class="blog4-img img100">
                                    <img src="{{ asset('assets') }}/client/img/blog/blog4-img1.png" alt="">
                                </div>
                                <div class="blog4-date">
                                    <a href="#" class="font-f-4">10</a>
                                    <div class="space5"></div>
                                    <p class="font-f-4">AUG</p>
                                </div>
                            </div>

                            <div class="hadding4 blog4-hadding">
                                <div class="blog4-tags">
                                    <a href="#" class="font-f-2"><img
                                            src="{{ asset('assets') }}/client/img/icons/blog4-icon2.svg"
                                            alt="">John
                                        Doe</a>
                                    <a href="#" class="font-f-2"><img
                                            src="{{ asset('assets') }}/client/img/icons/blog4-icon1.svg"
                                            alt="">Consulting</a>
                                </div>
                                <div class="space16"></div>
                                <h4><a href="blog-details.html" class="font-f-4">Common Visa Application Pitfalls
                                        and
                                        How to Avoid Them</a></h4>
                                <div class="space16"></div>
                                <p class="font-f-2">Explain the importance of understanding different visa types.
                                    Briefly discuss the most common visa categories (tourist, student, work, etc.).</p>
                                <div class="space24"></div>
                                <a class="service4-learn-more font-f-2" href="blog-details.html">Read more <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="space40"></div>
            <div class="row">
                <div class="col-lg-12 m-auto text-center" data-aos="fade-up" data-aos-duration="700">
                    <a href="blog.html" class="theme-btn9 font-f-4">Check All Blogs Posts</a>
                </div>
            </div>
        </div>

        <img class="choose4-shape1 aniamtion-key-2" src="{{ asset('assets') }}/client/img/shapes/hom4-shape2.svg"
            alt="">
        <img class="choose4-shape2 aniamtion-key-2" src="{{ asset('assets') }}/client/img/shapes/hom4-shape1.svg"
            alt="">
    </div>

    <!--=====blog end=======-->

    <!--=====cta start=======-->

    <div class="cta4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="hadding4">
                        <h1 class="font-f-4">Hãy để hành trình du học của bạn được dễ dàng và an toàn ngay hôm nay!</h1>
                        <div class="space30"></div>
                    </div>
                    <div class="cta4-subsribe-all _relative">
                        <form action="#">
                            <div class="cta4-inuut">
                                <input type="email" placeholder="Enter Your Email">
                            </div>
                            <div class="cta4-button">
                                <button type="submit" class="theme-btn9 font-f-4">Đăng ký ngay</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====cta end=======-->
@endsection
