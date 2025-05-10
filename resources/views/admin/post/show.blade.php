@extends('admin.layouts.master')

@section('title', 'Chi tiết bài viết')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Bài viết /</span> Chi tiết
    </h4>

    <div class="card">
        <div class="card-body">
            <h3>{{ $post->title }}</h3>

            @if($post->thumbnail)
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="img-fluid my-3" style="max-width: 400px;">
            @endif

            <p><strong>Danh mục:</strong> {{ $post->category->name ?? 'Không có' }}</p>

            @if($post->summary)
                <p><strong>Tóm tắt:</strong> {{ $post->summary }}</p>
            @endif

            <hr>

            <div>
                <h5>Nội dung chi tiết:</h5>
                <div>{!! $post->content !!}</div>
            </div>

            <hr>
            <p><strong>Ngày đăng:</strong> {{ $post->created_at->format('d/m/Y H:i') }}</p>

            <a href="{{ route('posts.index') }}" class="btn btn-secondary mt-3">Quay lại danh sách</a>
        </div>
    </div>
</div>
@endsection
