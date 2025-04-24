@extends('admin.layouts.master')

@section('title')
    Thêm sản phẩm
@endsection
@section('menu-item-product')
    open
@endsection

@section('menu-sub-create-product')
    active
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Sản Phẩm /</span><span> Thêm mới sản phẩm</span>
        </h4>
        <!-- Form tạo sản phẩm -->
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="app-ecommerce">
                <!-- Add Product -->
                <div
                    class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
                    <div class="d-flex flex-column justify-content-center">
                        <h4 class="mb-1 mt-3">Thêm sản phẩm mới</h4>
                        <p>Sản phẩm được đặt trên cửa hàng của bạn</p>
                    </div>
                    <div class="d-flex align-content-center flex-wrap gap-3">
                        <button type="reset" class="btn btn-outline-primary">Nhập Lại</button>
                        <a href="{{ route('products.index') }}" class="btn btn-info">Quay Lại</a>
                        <button type="submit" class="btn btn-primary">
                            Xuất bản
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Thông tin sản phẩm</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="ecommerce-product-name"
                                        placeholder="Tên sản phẩm" name="name" value="{{ old('name') }}" />
                                    <label for="ecommerce-product-name">Tên sản phẩm</label>
                                    @if ($errors->has('name'))
                                        <div class="text-danger">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>
                                <div hidden class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="ecommerce-product-slug"
                                        placeholder="Tên sản phẩm" name="slug" />

                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Content
                                        <span class="text-muted">(Optional)</span></label>
                                    <textarea class="form-control" name="content" id="content">{{ old('content') }}</textarea>
                                    @if ($errors->has('content'))
                                        <div class="text-danger">
                                            {{ $errors->first('content') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <textarea class="form-control" name="description" id="description" rows="2" placeholder="Mô tả ngắn">{{ old('description') }}</textarea>
                                    <label for="ecommerce-product-description">Mô tả ngắn</label>
                                    @if ($errors->has('description'))
                                        <div class="text-danger">
                                            {{ $errors->first('description') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label for="img_thumbnail" class="form-label">Ảnh sản phẩm</label>
                                    <input type="file" class="form-control" name="img_thumbnail" id="img_thumbnail"
                                        value="{{ old('img_thumbnail') }}">
                                    @if ($errors->has('img_thumbnail'))
                                        <div class="text-danger">
                                            {{ $errors->first('img_thumbnail') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <textarea class="form-control" name="user_manual" id="user_manual" rows="2" placeholder="Hướng dẫn sử dụng">{{ old('') }}</textarea>
                                    <label for="ecommerce-product-user_manual">Hướng dẫn sử dụng</label>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Album ảnh</h5>
                            </div>
                            <div class="card-body">
                                <div class="row gy-3" id="gallery-container">
                                    <div id="gallery_1">
                                        <label for="gallery_input_1" class="form-label">Gallery 1</label>
                                        <input type="file" class="form-control" name="product_galleries[]"
                                            id="gallery_input_1">
                                        @if ($errors->has('product_galleries'))
                                            <div class="text-danger">
                                                {{ $errors->first('product_galleries') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary mt-3" id="add-gallery"><i
                                        class="mdi mdi-plus me-0 me-sm-1"></i>Thêm</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Trạng Thái</h5>
                            </div>
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col">
                                        <div class="form-check form-switch form-switch-secondary">
                                            <input class="form-check-input" type="checkbox" role="switch" name="is_active"
                                                id="is_active" checked>
                                            <label class="form-check-label" for="is_active">Kích hoạt</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check form-switch form-switch-success">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                name="is_good_deal" id="is_good_deal" checked>
                                            <label class="form-check-label" for="is_good_deal">Sản phẩm tốt</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                name="is_new" id="is_new" checked>
                                            <label class="form-check-label" for="is_new">Sản phẩm mới</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check form-switch form-switch-danger">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                name="is_show_home" id="is_show_home" checked>
                                            <label class="form-check-label" for="is_show_home">Hiện thị Home</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Giá Cả</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="ecommerce-product-base_price"
                                        placeholder="Giá sản phẩm" name="base_price" value="{{ old('base_price') }}" />
                                    <label for="ecommerce-product-base_price">Giá sản phẩm</label>
                                    @if ($errors->has('base_price'))
                                        <div class="text-danger">
                                            {{ $errors->first('base_price') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-floating form-floating-outline ">
                                    <input type="text" class="form-control" id="ecommerce-product-base_price"
                                        placeholder="Giá sản phẩm" name="price_sale" value="{{ old('price_sale') }}" />
                                    <label for="ecommerce-product-base_price">Giá giảm giá</label>
                                    @if ($errors->has('price_sale'))
                                        <div class="text-danger">
                                            {{ $errors->first('price_sale') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Mã sản phẩm</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="ecommerce-product-base_price"
                                        placeholder="Mã sản phẩm" name="sku" value="{{ old('sku') }}" />
                                    <label for="ecommerce-product-base_price">Mã sản phẩm</label>
                                    @if ($errors->has('sku'))
                                        <div class="text-danger">
                                            {{ $errors->first('sku') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Tổ Chức</h5>
                            </div>
                            <div class="card-body">

                                <div class="form-floating form-floating-outline">
                                    <select name="categories[]" class="form-select" style="min-height: 100px" multiple>
                                        {{-- @foreach ($category as $id => $name)
                                            <option value="{{ $id }}">{{ $name }}</option>
                                        @endforeach --}}
                                    </select>
                                    <label for="name" class="form-label">Danh mục</label>
                                    @if ($errors->has('categories'))
                                        <div class="text-danger">
                                            {{ $errors->first('categories') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-3 mt-4">
                                    <div class="form-floating form-floating-outline">
                                        <input id="ecommerce-product-tags" class="form-control h-auto"
                                            name="ecommerce-product-tags" value="Normal,Standard,Premium"
                                            aria-label="Product Tags" />
                                        <label for="ecommerce-product-tags">Tags</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
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
