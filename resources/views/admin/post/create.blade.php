@extends('admin.layouts.master')

@section('title')
    Thêm bài viết
@endsection
@section('menu-item-product')
    open
@endsection

@section('menu-sub-create-product')
    active
@endsection

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Đã xảy ra lỗi!</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Bài viết /</span><span> Thêm mới bài viết </span>
        </h4>
        <!-- Form tạo sản phẩm -->
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Tiêu Đề</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                    @error('korean_name')
    <small class="text-danger">{{ $message }}</small>
@enderror
                </div>


                <div class="col-md-6">
                    <label class="form-label">Hình đại diện</label>
                    <input type="file" class="form-control" name="thumbnail" required>
                </div>

                <div class="col-md-3">
                    <label class="form-label">Tóm tắt</label>
                    <textarea name="summary" class="form-control">{{ old('summary') }}</textarea>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Nội dung chi tiết</label>
                    <textarea id="content"  name="content" class="form-control" rows="5">{{ old('content') }}</textarea>
                </div>

                <div class="col-md-12">
                    <label class="form-label">Chọn danh mục</label>
                    <select name="category_id" class="form-select">
                        <option value="" disabled selected>-- Chọn danh mục --</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-primary">Thêm trường</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('style-libs')
    <link rel="stylesheet" href="{{ asset('themes') }}/admin/vendor/libs/quill/typography.css" />
    <link rel="stylesheet" href="{{ asset('themes') }}/admin/vendor/libs/quill/katex.css" />
    <link rel="stylesheet" href="{{ asset('themes') }}/admin/vendor/libs/quill/editor.css" />
    <link rel="stylesheet" href="{{ asset('themes') }}/admin/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="{{ asset('themes') }}/admin/vendor/libs/dropzone/dropzone.css" />
    <link rel="stylesheet" href="{{ asset('themes') }}/admin/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="{{ asset('themes') }}/admin/vendor/libs/tagify/tagify.css" />
@endsection

@section('script-libs')
    <script src="{{ asset('themes') }}/admin/vendor/libs/quill/katex.js"></script>
    <script src="{{ asset('themes') }}/admin/vendor/libs/quill/quill.js"></script>
    <script src="{{ asset('themes') }}/admin/vendor/libs/select2/select2.js"></script>
    <script src="{{ asset('themes') }}/admin/vendor/libs/dropzone/dropzone.js"></script>
    <script src="{{ asset('themes') }}/admin/vendor/libs/jquery-repeater/jquery-repeater.js"></script>
    <script src="{{ asset('themes') }}/admin/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="{{ asset('themes') }}/admin/vendor/libs/tagify/tagify.js"></script>
    <script src="{{ asset('themes') }}/admin/js/app-ecommerce-product-add.js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .then(editor => {
                editor.ui.view.editable.element.style.height = '200px'; // Tăng chiều cao ở đây
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let galleryCount = 1;

            const galleryContainer = document.getElementById('gallery-container');
            const addGalleryButton = document.getElementById('add-gallery');

            addGalleryButton.addEventListener('click', function() {
                galleryCount++;
                const newGalleryDiv = document.createElement('div');
                newGalleryDiv.classList.add('col-12');
                newGalleryDiv.id = `gallery_${galleryCount}`;
                newGalleryDiv.innerHTML = `
                <label for="gallery_input_${galleryCount}" class="form-label">Gallery ${galleryCount}</label>
                <input type="file" class="form-control" name="product_galleries[]" id="gallery_input_${galleryCount}">
            `;
                galleryContainer.appendChild(newGalleryDiv);
            });
        });
    </script>
@endsection
