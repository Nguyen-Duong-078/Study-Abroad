@extends('client.layouts.master')
@section('content')
<style>
    .card {
    transition: all 0.3s ease-in-out;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}
</style>
    <!--=====Mobile header end=======-->
    <div class="container d-flex flex-column align-items-center justify-content-center" style="min-height: 70vh;">
        <div class="card shadow-lg p-5 text-center" style="max-width: 500px; border-radius: 16px;">
            <div class="mb-4">
                <div style="font-size: 60px; color: #2835a7;">🎉</div>
            </div>
            <h2 class="text-success mb-3">Cảm ơn bạn đã Đăng ký tư vấn và Liên hệ!</h2>
            <p class="text-muted">Chúng tôi đã nhận được thông tin và sẽ phản hồi sớm nhất có thể. Vui lòng kiểm tra email thường xuyên hoặc số điện thoại.</p>
            <a href="{{ url('/') }}" class="btn btn-outline-success mt-4 px-4">← Quay về trang chủ</a>
        </div>
    </div>


        @endsection
