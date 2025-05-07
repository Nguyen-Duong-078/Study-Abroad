@extends('admin.layouts.master')

@section('content')
    <div class="container "> <!-- Căn giữa container -->
        <h2 class="mb-4">Chi tiết trường học</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="py-4">

            <div class="mb-4">
                <h1 class="display-5">{{ $school->english_name }} ({{ $school->korean_name }})</h1>
                <p class="text-muted">Thuộc: {{ $school->categorie->name ?? 'Chưa phân loại' }}</p>
            </div>

            <div class="mb-4 text-center">
                <img src="{{ asset('storage/' . $school->img_thumbnail) }}" class="img-fluid rounded shadow-sm" alt="Ảnh trường">
            </div>

            <div class="mb-4">
                <strong>Năm thành lập:</strong> {{ $school->year_of }}<br>
                <strong>Số sinh viên:</strong> {{ $school->number_of_students }}<br>
                <strong>Học phí:</strong> {{ $school->tuition }}<br>
                <strong>Ký túc xá:</strong> {{ $school->dormitory }}<br>
                <strong>Địa chỉ:</strong> {{ $school->address }}<br>
                <strong>Website:</strong> <a href="{{ $school->website }}" target="_blank">{{ $school->website }}</a><br>
                <strong>Thuộc đơn vị:</strong> {{ $school->under }}
            </div>

            <div class="mb-4">
                <h4>Mô tả ngắn</h4>
                <p>{{ $school->description }}</p>
            </div>

            <div class="mb-5">
                <h4>Nội dung chi tiết</h4>
                <div>{!! $school->content !!}</div>
            </div>

            <div class="text-center">
                <a href="{{ route('schools.index') }}" class="btn btn-secondary">← Quay lại danh sách</a>
                <br>
                <button id="toggle-edit" class="btn btn-warning mt-3">✏️ Sửa thông tin</button>
            </div>

            {{-- Form sửa --}}
            <div id="edit-form" style="display: none;" class="mt-4">
                <form action="{{ route('schools.update', $school->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label>Danh mục</label>
                        <select name="categorie_id" class="form-control" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $school->categorie_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-2">
                        <strong>Tên Tiếng Hàn:</strong>
                        <input type="text" name="korean_name" class="form-control" value="{{ old('korean_name', $school->korean_name) }}" required>
                    </div>

                    <div class="form-group mb-2">
                        <strong>Tên Tiếng Anh</strong>
                        <input type="text" name="english_name" class="form-control" value="{{ old('english_name', $school->english_name) }}" required>
                    </div>

                    <div class="form-group mb-2">
                        <label for="img_thumbnail">Ảnh đại diện</label>
                        <input type="file" name="img_thumbnail" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="year_of">Năm thành lập</label>
                        <input type="number" name="year_of" class="form-control" value="{{ old('year_of', $school->year_of) }}" required>
                    </div>

                    <div class="form-group mb-2">
                        <label for="number_of_students">Số sinh viên</label>
                        <input type="number" name="number_of_students" class="form-control" value="{{ old('number_of_students', $school->number_of_students) }}" required>
                    </div>

                    <div class="form-group mb-2">
                        <label for="tuition">Học phí</label>
                        <input type="text" name="tuition" class="form-control" value="{{ old('tuition', $school->tuition) }}" required>
                    </div>

                    <div class="form-group mb-2">
                        <label for="dormitory">Ký túc xá</label>
                        <input type="text" name="dormitory" class="form-control" value="{{ old('dormitory', $school->dormitory) }}" required>
                    </div>

                    <div class="form-group mb-2">
                        <label for="address">Địa chỉ</label>
                        <input type="text" name="address" class="form-control" value="{{ old('address', $school->address) }}" required>
                    </div>

                    <div class="form-group mb-2">
                        <label for="website">Website</label>
                        <input type="url" name="website" class="form-control" value="{{ old('website', $school->website) }}" required>
                    </div>

                    <div class="form-group mb-2">
                        <label for="under">Thuộc đơn vị</label>
                        <input type="text" name="under" class="form-control" value="{{ old('under', $school->under) }}" required>
                    </div>

                    <div class="form-group mb-2">
                        <label for="description">Mô tả ngắn</label>
                        <textarea name="description" class="form-control" required>{{ old('description', $school->description) }}</textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="content">Nội dung chi tiết</label>
                        <textarea name="content" class="form-control" required>{{ old('content', $school->content) }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">💾 Lưu thay đổi</button>
                </form>
            </div>

        </div>
    </div>

    <script>
        document.getElementById('toggle-edit').addEventListener('click', function () {
            const form = document.getElementById('edit-form');
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        });
    </script>
@endsection
