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
            <span class="text-muted fw-light">Liên Hệ /</span> Danh sách
        </h4>
        @if (session()->has('success'))
            <div class="alert alert-success fw-bold">
                {{ session()->get('success') }}
            </div>
        @endif
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
                <div class="mb-3">
                    <strong>Họ tên:</strong> {{ $contact->name }}
                </div>
                <div class="mb-3">
                    <strong>Email:</strong> {{ $contact->email }}
                </div>
                <div class="mb-3">
                    <strong>Số điện thoại:</strong> {{ $contact->phone ?? '(Không có)' }}
                </div>
                <div class="mb-3">
                    <strong>Tiêu đề:</strong> {{ $contact->subject }}
                </div>
                <div class="mb-3">
                    <strong>Nội dung:</strong><br>
                    <p>{{ $contact->message }}</p>
                </div>
                <div class="mb-3">
                    <strong>Trạng thái:</strong>
                    @if ($contact->status)
                        <span class="badge bg-success">Đã đọc</span>
                    @else
                        <span class="badge bg-warning text-dark">Chưa đọc</span>
                    @endif
                </div>

                @if (!$contact->status)
                    <form method="POST" action="{{ route('contact.markRead', $contact->id) }}">
                        @csrf
                        <button type="submit" class="btn btn-success">Đánh dấu là đã đọc</button>
                    </form>
                @endif

                <a href="{{ route('contact.index') }}" class="btn btn-secondary mt-3">Quay lại</a>
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
