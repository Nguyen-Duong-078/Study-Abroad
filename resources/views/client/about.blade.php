@extends('client.layouts.master')
@section('content')
    <!--=====Mobile header end=======-->


    <!--=====pages hero start=======-->

    <div class="page-hero-area _relative" style="background-image: url({{ asset('assets/client/img/bg/page-bg.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto text-center">
                    <div class="page-hero-hadding">
                        <h1>Giới thiệu</h1>
                        <div class="space16"></div>
                        <div class="page-hero-p">
                            <a href="/">Trang chủ</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Giới thiệu về chúng tôi</p>
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

    <!--=====about start=======-->
    <div class="about2 sp3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="hero2-all-images text-end">
                        <div class="hero2-img1">
                            <img src="{{ asset('assets/client/img/image/about2-img.png') }}" alt="">
                        </div>
                        <div class="hero2-img2 aniamtion-key-2">
                            <img src="{{ asset('assets/client/img/shapes/hero2-img-element.svg') }}" alt="">
                        </div>

                        <div class="hero2-img3">
                            <img src="{{ asset('assets/client/img/shapes/hero2-img-element2.svg') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="hadding4 about4-hadding">
                        <span>Giới thiệu về M.I.M</span>
                        <div class="space16"></div>
                        <h1>Chào mừng khách đến thăm và nêu rõ sứ mệnh và giá trị của công ty.</h1>
                        <div class="space20"></div>
                        <h4>Lịch sử hình thành</h4>
                        <div class="space24"></div>
                        <p><b>Công ty TNHH Du học Quốc tế M.I.M.</b> được thành lập bởi chị Nguyễn Thị Loan – cựu du học sinh đã có
                            hơn 8 năm sinh sống và học tập tại Hàn Quốc, tốt nghiệp chuyên ngành Khách sạn – Du lịch tại
                            trường đại học Daegu ( 대구대학교). Trong suốt quá trình học tập, chị không chỉ tích lũy kiến thức
                            chuyên môn mà còn có trải nghiệm sâu sắc về cuộc sống thực tế của du học sinh Việt Nam tại Hàn.
                        </p>
                        <div class="space20"></div>
                        <p>Sau khi tốt nghiệp, chị Loan tiếp tục làm việc tại văn phòng luật visa tại Hàn Quốc, chuyên hỗ
                            trợ xử lý hồ sơ, xin visa, và tư vấn pháp lý cho du học sinh, người lao động và các trường hợp
                            định cư. Chính từ môi trường làm việc thực tế này, chị có được cái nhìn toàn diện và sâu sắc về
                            hệ thống visa, luật pháp, và những khó khăn mà người Việt gặp phải khi du học Hàn Quốc.</p>
                        <div class="space20"></div>
                        <p>Trở về Việt Nam, mang theo kinh nghiệm quý báu và khát vọng hỗ trợ thế hệ trẻ, chị thành lập Công
                            ty TNHH Du học Quốc tế M.I.M. Với định hướng phát triển bền vững, M.I.M. ra đời với mục tiêu trở
                            thành cầu nối uy tín đưa học sinh Việt Nam đến với nền giáo dục hiện đại, định hướng tư duy quốc
                            tế và tương lai rộng mở.</p>
                        <div class="space20"></div>
                        <p>Công ty hoạt động dựa trên nguyên tắc: làm thật – đúng luật – đồng hành lâu dài, cung cấp dịch vụ
                            tư vấn, làm hồ sơ du học và hỗ trợ toàn diện cho học sinh từ khi còn ở Việt Nam đến khi ổn định
                            cuộc sống tại Hàn Quốc.</p>
                        <div class="space32"></div>
                        <div class="">
                            <a href="about.html" class="theme-btn9 font-f-4">Tìm hiểu thêm về VISA!</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--=====about end=======-->

    <!--=====about mission start=======-->

    <div class="service2 sp3 _relative" style="background-color: #F2F5F5;">
        <div class="container">
            <div class="row">

                <div class="col-lg-7">
                    <div class="hadding2 about2-hadding">
                        <span>Sứ mệnh của chúng tôi</span>
                        <div class="space16"></div>
                        <h1>Trao quyền cho việc khám phá bạn Hướng dẫn bạn đến những chân trời Mới trong du học</h1>
                        <div class="space24"></div>
                        <p>Công ty TNHH Du học Quốc tế M.I.M. mang sứ mệnh <strong>kết nối tri thức – chắp cánh ước mơ du học cho
                            thế hệ trẻ Việt Nam.</strong></p>
                        <div class="space20"></div>
                        <p>Chúng tôi cam kết đồng hành cùng học sinh và phụ huynh từ bước đầu định hướng ngành học, xử lý hồ
                            sơ, xin visa đến quá trình ổn định cuộc sống tại Hàn Quốc, với tinh thần tận tâm – minh bạch –
                            đúng luật.</p>
                        <div class="space32"></div>
                        <div class="">
                            <a href="about.html" class="theme-btn9 font-f-7">Tư Vấn Ngay</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="hero2-all-images text-end">
                        <div class="hero2-img1">
                            <img src="{{ asset('assets/client/img/image/about2-img.png') }}" alt="">
                        </div>
                        <div class="hero2-img2 aniamtion-key-2">
                            <img src="{{ asset('assets/client/img/shapes/hero2-img-element.svg') }}" alt="">
                        </div>

                        <div class="hero2-img3">
                            <img src="{{ asset('assets/client/img/shapes/hero2-img-element2.svg') }}" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <img class="service2-shape1 aniamtion-key-2" src="{{ asset('assets/client/img/shapes/service2-shape2.svg') }}" alt="">
        <img class="service2-shape2 aniamtion-key-2" src="{{ asset('assets/client/img/shapes/service2-shape1.svg') }}" alt="">
    </div>

    <!--=====about mission end=======-->

    <!--=====about vission start=======-->

    <div class="about-vission sp3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="img5 img100">
                                <img src="{{ asset('assets/client/img/image/about-vision1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="space30"></div>
                        <div class="col-lg-6 col-md-6">
                            <div class="img5 img100">
                                <img src="{{ asset('assets/client/img/image/about-vision1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="img5 img100">
                                <img src="{{ asset('assets/client/img/image/about-vision1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hadding2 about-vission-hadding">
                        <span class="span">Tầm nhìn</span>
                        <div class="space16"></div>
                        <h1>Chiếu sáng cuộc sống thông qua Du Học</h1>
                        <div class="space24"></div>
                        <p>Trở thành một trong những đơn vị tư vấn du học Hàn Quốc hàng đầu tại miền Bắc,góp phần nâng cao chất lượng nguồn nhân lực trẻ và tạo nên cộng đồng du học sinh Việt Nam vững mạnh, tự tin hội nhập quốc tế.</p>


                        <div class="space32"></div>
                        <a href="contact.html" class="theme-btn9 font-f-7">Tư Vấn Ngay</a>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--=====about vission end=======-->


    <!--=====countrie start=======-->



    <!--=====countrie end=======-->


    <!--=====team start=======-->


    <!--=====team end=======-->



    <!--=====testimonial start=======-->



    <!--=====testimonial end=======-->


    <!--=====blog start=======-->



    <!--=====blog end=======-->



    <!--=====contact start=======-->





            <!--=====contact end=======-->


            <!--=====cta start=======-->

            <div class="cta2" style="background-color: #462ab4;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="cta2-hadding2">
                                <h1>Chúng tôi cam kết làm cho quá trình xin thị thực của bạn
                                </h1>
                                <div class="space16"></div>
                                <p>M.I.M không chỉ Đào Tạo; họ thực sự quan tâm đến sự thành công của khách hàng. Chuyên gia tư vấn của tôi không chỉ giúp tư vấn.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="cta2-form">

                                <button class="theme-btn9 cta2-button font-f-7">Tư Vấn Ngay</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
