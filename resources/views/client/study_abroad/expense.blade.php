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
                            <a href="coaching.html">Du Học Cần Biết</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Chi phí</p>
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
                                <h3>Chi phí du học Hàn Quốc cần bao nhiêu? </h3>
                            </span>
                            <div class="space20"></div>
                            <p>Du học Hàn Quốc cần bao nhiêu tiền? Thật khó để đưa ra câu trả lời chính xác cho câu hỏi này
                                bởi chi phí du học Hàn Quốc phụ thuộc vào nhiều yếu tố khác nhau như khả năng tiếng Hàn,
                                trường đăng ký học, nhu cầu cá nhân,.... Tư vấn du học M.I.M sẽ liệt kê chi tiết các khoản
                                phí cần chi trả tiết để giúp bạn ước chừng đi du học Hàn Quốc hết bao nhiêu tiền. </p>

                        </div>
                    </div>
                    <div class="space50"></div>
                    <div class="hadding4">
                        <h3>Học tiếng Hàn và thi chứng chỉ</h3>
                        <div class="space16"></div>

                        <p style="">Nếu chưa biết tiếng Hàn thì bạn phải đi học tiếng tại trường hoặc trung tâm và thi
                            chứng chỉ trước khi đi du học. Đây là khoản chi phí du học Hàn Quốc bạn phải chi trả khi ở Việt
                            Nam, trung bình khoảng 5-10 triệu đồng.
                        </p>
                        <div class="space10"></div>
                        <p style="">Với những bạn đi học tiếng thì không cần có chứng chỉ Topik nhưng vốn tiếng Hàn
                            phải đảm bảo đủ để giao tiếp khi phỏng vấn với Đại sứ quán và đại diện trường cũng như sinh hoạt
                            hàng ngày. Còn những bạn đi du học Hàn Quốc bậc đại học/thạc sĩ thì yêu cầu tối thiểu Topik 3
                            hoặc 4. Trường hợp chưa có chứng chỉ Topik vẫn có thể đi du học đại học và thạc sĩ nhưng buộc
                            phải hoàn thành khóa tiếng Hàn tại trường ở xứ sở kim chi có chất lượng tương đương trường bạn
                            đăng ký học. Tuy nhiên, tiền học tiếng tại Hàn Quốc cao hơn so với học tại Việt Nam nên bạn hãy
                            cân nhắc thật kỹ nhé!
                        </p>
                    </div>


                    <div class="space50"></div>
                    <div>
                        <img src="{{ asset('assets/client/img/image/tien2.jpg') }}" alt="">
                    </div>
                    <div class="space50"></div>
                    <div class="hadding4">
                        <h2>Học phí du học Hàn Quốc cần bao nhiêu tiền? </h2>
                        <div class="space18"></div>
                        <div class="space20"></div>
                        <p>Học phí chiếm phần lớn trong chi phí du học Hàn Quốc. Tùy từng trường học, ngành học và chương
                            trình đào tạo, học phí sẽ có sự chênh lệch đáng kể. Bạn có thể tham khảo học phí cho các chương
                            trình đào tạo tại Hàn Quốc dưới đây:

                        </p>
                        <div class="space10"></div>
                        <p style="text-indent: 30px;">- Khóa tiếng Hàn: 3.000 -5.000 USD/năm, tương đương khoảng 74-120
                            triệu đồng/năm.
                        </p>
                        <p style="text-indent: 30px;">- Đại học, cao học công lập: 4.000- 6.600 USD, tương đương khoảng 98 -
                            161 triệu đồng/năm.
                        </p>
                        <p style="text-indent: 30px;">- Đại học, cao học tư thục: 6.000- 12.000 USD, tương đương khoảng 146
                            - 293 triệu đồng/năm.
                        </p>
                        <p style="text-indent: 30px;">- Chương trình đại học bằng tiếng Anh: 10.000 - 12.000 USD/năm, tương
                            đương khoảng 243 - 293 triệu đồng/năm.
                        </p>
                        <p style="text-indent: 30px;">- Cao học bằng tiếng Anh: 20.000 - 25.000 USD/năm, tương đương khoảng
                            488 - 610 triệu đồng/năm.
                        </p>
                        <div class="space10"></div>
                        <p> Bên cạnh đó, một số ngành học nổi bật tại Hàn Quốc cũng có học phí cao hơn những ngành cơ bản.
                            Chẳng hạn: </p>
                        <div class="space10"></div>
                        <p style="text-indent: 30px;">- Kinh doanh: 3.000 - 5.000 USD/kỳ.
                        </p>
                        <p style="text-indent: 30px;">- Các ngành xã hội: 2.000 - 3.500 USD/kỳ.
                        </p>
                        <p style="text-indent: 30px;">- Ngành Y: 2.500 - 5.000 USD/kỳ.
                        </p>
                        <p style="text-indent: 30px;">- Nhóm ngành kỹ thuật: 4.300 - 6.000 USD/kỳ.
                        </p>
                    </div>
                    <div class="space50"></div>
                    <div>
                        <img src="{{ asset('assets/client/img/image/tien1.jpg') }}" alt="">
                    </div>
                    <div class="space50"></div>
                    <div class="hadding4">
                        <h3>Chi phí sinh hoạt du học Hàn Quốc </h3>
                        <div class="space18"></div>
                        <div class="space20"></div>

                        <p>Đi du học Hàn Quốc cần bao nhiêu tiền? Ngoài học phí, tiền sinh hoạt hàng tháng cũng chiếm một
                            khoản kha khá, sinh viên cần chi các khoản như tiền thuê nhà, ăn uống, vui chơi, dịch vụ, mua
                            sắm,.... Tùy hoàn cảnh và nhu cầu chi tiêu cá nhân mà tiền sinh hoạt sẽ có sự khác nhau, không
                            có một con số chính xác. Bạn có thể tham khảo bảng chi phí sinh hoạt sau:

                        </p>
                        <div class="space20"></div>
                        <div>
                            <img src="{{ asset('assets/client/img/image/sinhhoat.png') }}" alt=""
                                style="height: 200px">
                        </div>
                        <div class="space50"></div>
                        <div class="hadding4">
                            <h3>
                                <div class="space26"></div>
                                <div class="hadding4">
                                    <h3>Các khoản phí khác
                                    </h3>
                                    <div class="space18"></div>
                                    <div class="space20"></div>

                                    <p>Bên cạnh tiền sinh hoạt, du học Hàn Quốc tốn bao nhiêu tiền còn phụ thuộc một phần
                                        vào các khoản phí sau:



                                    </p>
                                    <div class="space20"></div>
                            </h3>

                            <p style="text-indent: 30px;">- Phí xin visa: Khoảng 35 - hơn 45 triệu đồng.
                            </p>
                            <p style="text-indent: 30px;">- Vé máy bay: Khoảng 8-12 triệu đồng, có thể cao hoặc thấp hơn tùy
                                từng thời điểm.
                            </p>
                            <p style="text-indent: 30px;">- Phí đưa đón du học sinh: Khoảng 1.5 - 2.5 triệu đồng.
                            </p>
                            <p style="text-indent: 30px;">- Phí hoàn thiện hồ sơ khi học lên chuyên ngành: Khoảng 12- 20
                                triệu đồng.
                            </p>
                            <p style="text-indent: 30px;">- Phí mua bảo hiểm 1 năm đầu (bắt buộc) tại Hàn Quốc: Khoảng 4
                                triệu đồng, đóng cho trường theo học.
                            </p>
                            <div class="space20"></div>
                            <div class="hadding4">
                                <h3>Tổng chi phí du học Hàn Quốc bao nhiêu? </h3>
                                <div class="space18"></div>
                                <div class="space20"></div>

                                <p>Vậy tổng chi phí du học Hàn Quốc là bao nhiêu? Tổng chi phí du học Hàn Quốc cần chuẩn bị
                                    là 180.000.000 VND tới 300.000.000 VND bao gồm Học phí khoảng 6 – 12 tháng + tiền ký túc
                                    6 tháng + tiền làm hồ sơ ở VN+ tiền phí dịch vụ cho công ty làm hồ sơ ở VN + khoản tiền
                                    ăn + sinh hoạt 2 tháng đầu ở Hàn. Đây là tổng hết tất cả các khoản tiền và không có phát
                                    sinh thêm chi phí nào khác.

                                </p>
                                <div class="space16"></div>
                                <p>Tổng chi phí du học hàn quốc 1 năm khoảng 180 - 220 triệu đồng. Bởi lần đầu đóng học phí,
                                    bạn sẽ chỉ cần đóng nửa kỳ rồi đóng tiếp phần còn lại sau khi sang Hàn. Ngoài ra, các
                                    bạn có thể xin học bổng của các trường đại học để tiết kiệm chi phí.

                                </p>
                                <div class="space20"></div>
                                <div class="space20"></div>
                                <div>
                                    <img src="{{ asset('assets/client/img/image/dulich5.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="space20"></div>
                            <div class="hadding4">
                                <h3>Kinh nghiệm tiết kiệm chi phí du học Hàn Quốc</h3>
                                <div class="space18"></div>
                                <div class="space20"></div>

                                <p>Mặc dù chi phí du học Hàn Quốc "dễ thở" hơn so với các nước Úc, Mỹ, Anh,... nhưng chi phí
                                    vẫn là vấn đề đáng lo ngại đối với những bạn có tài chính eo hẹp. Nếu muốn tiết kiệm chi
                                    phí đi du học tại xứ sở kim chi thì nhanh tay bỏ túi ngay các bí quyết sau:

                                </p>
                                <div class="space16"></div>
                                <p>Tổng chi phí du học hàn quốc 1 năm khoảng 180 - 220 triệu đồng. Bởi lần đầu đóng học phí,
                                    bạn sẽ chỉ cần đóng nửa kỳ rồi đóng tiếp phần còn lại sau khi sang Hàn. Ngoài ra, các
                                    bạn có thể xin học bổng của các trường đại học để tiết kiệm chi phí.

                                </p>
                                <p style="text-indent: 30px;">- Săn học bổng: Sở hữu thành tích học tập xuất sắc, bạn sẽ có
                                    cơ hội nhận được học bổng giá trị, miễn chi phí học tập. Hiện nay, đa số các trường ở
                                    Hàn Quốc chỉ trao học bổng từ năm 2 để sinh viên chú tâm vào việc học nên hãy chú tâm
                                    vào học tập, không bỏ lỡ cơ hội ẵm học bổng nhé!
                                </p>
                                <p style="text-indent: 30px;">- Làm thêm: Thời gian rảnh rỗi, du học sinh có thể lựa chọn đi
                                    làm thêm vừa kiếm thu nhập trang trải cuộc sống vừa tạo cơ hội giao lưu, tích lũy kinh
                                    nghiệm và nâng cao kỹ năng sống.
                                </p>
                                <p style="text-indent: 30px;">- Chọn trường học phí rẻ: Những ngôi trường ở xa trung tâm sẽ
                                    có mức học phí ưu đãi hơn những bạn sẽ phải chịu 1 số bất lợi trong việc tìm kiếm làm
                                    thêm do nhu cầu việc làm không cao như trung tâm. Ngoài ra, trường ở khu vực này, chấp
                                    nhận sinh viên chỉ cần đóng full học phí học kỳ đầu thay vì cả năm đầu.
                                </p>
                                <p style="text-indent: 30px;">- Tối ưu chi tiêu: Lựa chọn ở ký túc xá hoặc thuê nhà ở chung
                                    với bạn để chia sẻ tiền nhà, tiền dịch vụ và có thể tự nấu ăn ở nhà để tiết kiệm chi
                                    phí. Ngoài ra, nếu ở gần trường thì bạn nên ưu tiên đi bộ hoặc sử dụng phương tiện công
                                    cộng.
                                </p>
                                <div class="space20"></div>
                                <div class="space20"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
