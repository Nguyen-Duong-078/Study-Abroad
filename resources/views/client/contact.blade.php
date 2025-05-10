@extends('client.layouts.master')
@section('content')
    <!--=====Mobile header end=======-->


    <!--=====pages hero start=======-->
<style>
    .contact7-input select.form-control {
    height: 48px;
    border-radius: 4px;
    padding: 10px 15px;
    font-size: 14px;
    color: #333;
    border: 1px solid #ccc;
}
</style>
    <div class="contact7" style="background-color: #F3F6F6;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="hadding4 contact4-hadding">
                        <span class="span">Đăng ký Tư Vấn và Liên Hệ</span>
                        <div class="space16"></div>
                        <h1>Hãy Viết Những Điều Mà Bạn Muốn MIM Giải Đáp</h1>
                        <div class="space16"></div>
                        <p>Cho dù bạn có thắc mắc về dịch vụ của chúng tôi, muốn đặt lịch tư vấn </p>
                        <div class="space8"></div>
                        <form action="{{ route('contact.submit') }}" method="post">
                            @csrf
                            <div class="contact7-form">
                                <div class="contact7-input">
                                    <input type="text" name="name" class="form-control" placeholder="Họ Tên*" value="{{ old('name') }}">
                                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="contact7-input">
                                    <input type="email" name="email" class="form-control" placeholder="Email*" value="{{ old('email') }}">
                                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="contact7-input">
                                    <input type="number" name="phone" class="form-control" placeholder="Số Điện Thoại" value="{{ old('phone') }}">
                                    @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
<br>
                                <div class="contact7-input">
                                    <select name="subject" class="form-control">
                                        <option value="" >-- Chọn  --</option>
                                        <option value="Liên hệ" {{ old('subject') == 'Liên hệ' ? 'selected' : '' }}>Liên hệ</option>
                                        <option value="Tư vấn" {{ old('subject') == 'Tư vấn' ? 'selected' : '' }}>Tư vấn</option>
                                    </select>
                                    @error('subject') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="contact7-input">
                                    <textarea cols="30" rows="3" placeholder="Điều bạn muốn nói*" name="message"></textarea>
                                </div>
                                <div class="space32"></div>
                                <button class="theme-btn5 font-f-7">TƯ VẤN nGAY!</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-map contact-map2">
                        <div class="img100 img5" style="z-index: 4; position: relative;">
                            <img src="{{asset('assets/client/img/image/contact-page.png')}}" alt="">
                        </div>
                      </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="contact7-icon-box contact7-icon-box2">
                        <div class="contact7-icon">
                            <img src="{{asset('assets/client/img/icons/page-contact-icon1.svg')}}" alt="">
                        </div>
                        <div class="contact7-iocn-hadding">
                            <h4><a href="#">Office Address</a></h4>
                            <div class="space6"></div>
                            <a href="#">3520 E Bell Rd Phoenix Arkansas</a>
                            <a href="#">85032 United States, NY 10018 </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact7-icon-box contact7-icon-box2">
                        <div class="contact7-icon">
                            <img src="{{ asset('assets/client/img/icons/contact-page2-icon1.svg') }} "alt="">
                        </div>
                        <div class="contact7-iocn-hadding">
                            <h4><a href="#">Contact Number</a></h4>
                            <div class="space6"></div>
                            <a href="tel:+921-888-0022">+921 - 888 - 0022</a><br>
                            <a href="tel:+921-777-0044">+921 - 777 - 0044 </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact7-icon-box contact7-icon-box2">
                        <div class="contact7-icon">
                            <img src="{{ asset('assets/client/img/icons/contact-page2-icon3.svg') }} "alt="">
                        </div>
                        <div class="contact7-iocn-hadding">
                            <h4><a href="#">Email Address</a></h4>
                            <div class="space6"></div>
                            <a href="mailto:hello@visafast.com">hello@visafast.com</a> <br>
                            <a href="mailto:support@visafast.com">support@visafast.com </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
      </div>

      <div class="contact-map-page">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d196064.65881483705!2d88.93201515862421!3d24.061083775097945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39febca82f6a21ed%3A0x4040980d7c6874f8!2sKushtia%20District!5e0!3m2!1sen!2sbd!4v1673751720794!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <!--=====contact end=======-->

      <!--=====cta start=======-->

<div class="cta2" style="background-color: #13AAA1;">
<div class="container">
  <div class="row align-items-center">
    <div class="col-lg-7">
      <div class="cta2-hadding2">
        <h1>We're Committed to Making your Visa Application Process</h1>
        <div class="space16"></div>
        <p>Visa Consulting doesn't just handle the paperwork; they genuinely care about their clients' success. My consultant not only helped with the application visa consulting.</p>
      </div>
    </div>
    <div class="col-lg-5">
      <div class="cta2-form">
        <div class="cta2-input">
          <input type="Enter Your Email" placeholder="Enter Your Email">
        </div>
          <button class="theme-btn5 cta2-button font-f-7">Subscribe Now</button>
      </div>
    </div>
  </div>
</div>
</div>
        @endsection
