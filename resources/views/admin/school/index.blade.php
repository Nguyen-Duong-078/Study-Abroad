@extends('admin.layouts.master')

@section('title')
    Thêm sản phẩm
@endsection
@section('menu-item-product')
    open
@endsection

@section('menu-sub-index-product')
    active
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4>
            <span class="text-muted fw-light">Sản Phẩm /</span> Danh sách
        </h4>
        @if (session()->has('success'))
            <div class="alert alert-success fw-bold">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="card-header d-flex justify-content-end align-items-center mb-3">
            <a class="btn btn-primary" href="{{ route('schools.create') }}"><i class="mdi mdi-plus me-0 me-sm-1"></i>Thêm sản
                phẩm</a>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên tiếng Hàn</th>
                            <th>Tên tiếng Anh</th>
                            <th>Danh mục</th>
                            <th>Ảnh</th>
                            <th>Học phí</th>
                            <th>Sinh viên</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($schools as $school)

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $school->korean_name }}</td>
                            <td>{{ $school->english_name }}</td>
                            <td>

                                {{ $school->categorie->name ?? 'Không tìm thấy' }}
                            </td>
                            <td>
                                <img src="{{ asset('storage/' . $school->img_thumbnail) }}" width="80" height="60" alt="thumbnail">
                            </td>
                            <td>{{ $school->tuition }}</td>
                            <td>{{ $school->number_of_students }}</td>
                            <td>
                                <a href="{{ route('schools.show', $school->id) }}" class="btn btn-sm btn-warning">Sửa</a>
                                <form action="{{ route('schools.destroy', $school->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Xác nhận xóa?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Xóa</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination-wrapper">
                    {{ $schools->links('pagination::bootstrap-5') }} <!-- Bootstrap pagination -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('style-libs')
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
@endsection

@section('script-libs')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script>
        new DataTable("#example", {
            order: [
                [0, 'desc']
            ]
        });
    </script>
@endsection
