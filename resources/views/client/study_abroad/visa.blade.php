@extends('client.layouts.master')
@section('content')
    <div class="page-hero-area _relative" style="background-image: url({{ asset('assets/client/img/bg/page-bg.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto text-center">
                    <div class="page-hero-hadding">
                        <h1>Chi phí</h1>
                        <div class="space16"></div>
                        <div class="page-hero-p">
                            <a href="index1.html">Trang chủ</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <a href="">Du Học Cần Biết</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>VISA</p>
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
    <div class="coaching-all sp3">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 m-auto">
                    <div class="row align-items-center">
                        <div class="hadding4">
                            <span class="span">
                                <h3>Tìm hiểu về VISA</h3>
                            </span>
                            <div class="space20"></div>
                            <p>Muốn nhập cảnh vào Hàn Quốc học tập và sinh sốn, bạn bắt buộc bạn phải xin được loại visa
                                đúng yêu cầu. Visa du học Hàn Quốc được cấp cho du học sinh muốn đi du học và sống tại xứ sở
                                kim chi trong thời gian học tập tại đây. Tùy theo từng khóa học và chương trình mà bạn theo
                                học, có những loại visa khác nhau được cấp. Cùng tìm hiểu kỹ hơn về visa du học Hàn Quốc</p>

                        </div>
                    </div>
                    <div class="space50"></div>
                    <div class="hadding4">
                        <h3>Visa D-4-1 Du học tiếng Hàn </h3>
                        <div class="space16"></div>

                        <p style="">Thời gian lưu trú: 6 tháng đến 2 năm (gia hạn mỗi 6 tháng)
                        </p>
                        <p style="">Điều kiện chuyển tiếp:
                        </p>
                        <p style="text-indent: 30px;">- Học đầy đủ, không bỏ tiết
                        </p>
                        <p style="text-indent: 30px;">- Đạt TOPIK 3 hoặc có giấy báo nhập học hệ đại học/cao học
                        </p>
                        <div class="space16"></div>
                        <p style="">Có thể chuyển sang visa D-2
                        </p>

                    </div>


                    <div class="space50"></div>
                    <div>
                        <img src="{{ asset('assets/client/img/image/visa1.jpg') }}" alt="" width="4000px">
                    </div>
                    <div class="space50"></div>
                    <div class="hadding4">
                        <h2>Visa D-2 Du học hệ chính quy (Đại học, Cao học, Tiến sĩ)</h2>
                        <div class="space18"></div>
                        <div class="space20"></div>
                        <p style="text-indent: 30px;">- Thời gian lưu trú: Theo kỳ học (1 năm/lần, gia hạn đến khi tốt
                            nghiệp)
                        </p>
                        <p style="text-indent: 30px;">- Điều kiện chuyển tiếp:
                        </p>
                        <p style="text-indent: 30px;">- Tốt nghiệp chương trình học
                        </p>
                        <p style="text-indent: 30px;">- Có bằng cấp tại Hàn Quốc
                        </p>
                        <div class="space16"></div>
                        <p style="">Có thể chuyển sang visa D-10
                        </p>
                    </div>


                    <div class="space50"></div>
                    <div class="hadding4">
                        <h2>Visa D-10 Tìm việc sau tốt nghiệp</h2>
                        <div class="space18"></div>
                        <div class="space20"></div>
                        <p style="text-indent: 30px;">-Thời gian lưu trú: 2 năm (có thể gia hạn 6 tháng 1 lần)
                        </p>
                        <p style="text-indent: 30px;">- Điều kiện chuyển tiếp:
                        </p>
                        <p style="text-indent: 30px;">- Có bằng đại học hoặc cao hơn
                        </p>
                        <p style="text-indent: 30px;">- Nộp kế hoạch xin việc, lý lịch cá nhân (CV)
                        </p>
                        <p style="text-indent: 30px;">- Có năng lực tiếng Hàn (TOPIK), tài chính ổn định
                        </p>
                        <div class="space16"></div>
                        <p style="">Có thể chuyển sang visa E-7 hoặc F-2-R
                        </p>
                    </div>
                    <div class="space50"></div>
                    <div class="hadding4">
                        <h2>Visa D-10 Tìm việc sau tốt nghiệp</h2>
                        <div class="space18"></div>
                        <div class="space20"></div>
                        <p style="text-indent: 30px;">-Thời gian lưu trú: 2 năm (có thể gia hạn 6 tháng 1 lần)
                        </p>
                        <p style="text-indent: 30px;">- Điều kiện chuyển tiếp:
                        </p>
                        <p style="text-indent: 30px;">- Có bằng đại học hoặc cao hơn
                        </p>
                        <p style="text-indent: 30px;">- Nộp kế hoạch xin việc, lý lịch cá nhân (CV)
                        </p>
                        <p style="text-indent: 30px;">- Có năng lực tiếng Hàn (TOPIK), tài chính ổn định
                        </p>
                        <div class="space16"></div>
                        <p style="">Có thể chuyển sang visa E-7 hoặc F-2-R
                        </p>
                    </div>
                    <div class="space50"></div>
                    <div class="hadding4">
                        <h2>Visa D-10 Tìm việc sau tốt nghiệp</h2>
                        <div class="space18"></div>
                        <div class="space20"></div>
                        <p style="text-indent: 30px;">-Thời gian lưu trú: 2 năm (có thể gia hạn 6 tháng 1 lần)
                        </p>
                        <p style="text-indent: 30px;">- Điều kiện chuyển tiếp:
                        </p>
                        <p style="text-indent: 30px;">- Có bằng đại học hoặc cao hơn
                        </p>
                        <p style="text-indent: 30px;">- Nộp kế hoạch xin việc, lý lịch cá nhân (CV)
                        </p>
                        <p style="text-indent: 30px;">- Có năng lực tiếng Hàn (TOPIK), tài chính ổn định
                        </p>
                        <div class="space16"></div>
                        <p style="">Có thể chuyển sang visa E-7 hoặc F-2-R
                        </p>
                    </div>
                    <div class="space50"></div>
                    <div class="hadding4">
                        <h2>Visa E-7 Visa lao động chuyên ngành</h2>
                        <div class="space18"></div>
                        <div class="space20"></div>
                        <p style="text-indent: 30px;">-Thời gian lưu trú: 1 – 2 năm (gia hạn liên tục được)
                        </p>
                        <p style="text-indent: 30px;">- Điều kiện chuyển tiếp:
                        </p>
                        <p style="text-indent: 30px;">- Có bằng cấp và công việc phù hợp chuyên ngành
                        </p>
                        <p style="text-indent: 30px;">- Hợp đồng lao động với công ty Hàn Quốc
                        </p>
                        <p style="text-indent: 30px;">- Mức lương ổn định, công ty đủ điều kiện bảo lãnh
                        </p>
                        <div class="space16"></div>
                        <p style="">ó thể chuyển sang visa F2
                        </p>
                    </div>
                    <div class="space50"></div>
                    <div class="hadding4">
                        <h2>Visa F-2-R làm việc vùng thưa dân</h2>
                        <div class="space18"></div>
                        <div class="space20"></div>
                        <p style="text-indent: 30px;">-Thời gian lưu trú: 5 năm (gia hạn được, dễ đổi công việc)
                        </p>
                        <p style="text-indent: 30px;">- yêu cầu topik 4.
                        </p>
                        <p style="text-indent: 30px;">- Không vi phạm pháp luật .
                        </p>
                        <div class="space16"></div>
                        <p style="">Có thể chuyển sang visa F-5 (thường trú)
                        </p>
                    </div>
                    <div class="space50"></div>
                    <div class="hadding4">
                        <h2>Visa D-8 Visa đầu tư kinh doanh</h2>
                        <div class="space18"></div>
                        <div class="space20"></div>
                        <p style="text-indent: 30px;">-Thời gian lưu trú: 1 – 2 năm (gia hạn được)
                        </p>
                        <p style="text-indent: 30px;">- Điều kiện chuyển tiếp:
                        </p>
                        <p style="text-indent: 30px;">- Đầu tư tối thiểu 100 triệu won (~2 tỷ VNĐ)
                        </p>
                        <p style="text-indent: 30px;">- Thành lập công ty tại Hàn, có kế hoạch kinh doanh rõ ràng
                        </p>
                        <p style="text-indent: 30px;">- Công ty hoạt động hợp pháp và ổn định
                        </p>
                    </div>
                </div>
                <div class="space50"></div>
                <div class="hadding4">
                    <h2>Visa F-5 Visa thường trú (định cư lâu dài)</h2>
                    <div class="space18"></div>
                    <div class="space20"></div>
                    <p style="text-indent: 30px;">-Thời gian lưu trú: Vĩnh viễn (không cần gia hạn)
                    </p>
                    <p style="text-indent: 30px;">- Điều kiện chuyển tiếp:
                    </p>
                    <p style="text-indent: 30px;">- Sống hợp pháp tại Hàn nhiều năm
                    </p>
                    <p style="text-indent: 30px;">- Có thu nhập, nhà ở ổn định
                    </p>
                    <p style="text-indent: 30px;">- Đạt TOPIK 4 trở lên
                    </p>
                    <p style="text-indent: 30px;">- Không vi phạm pháp luật, đóng thuế đầy đủ
                    </p>

                </div>

            </div>
 
                @endsection
