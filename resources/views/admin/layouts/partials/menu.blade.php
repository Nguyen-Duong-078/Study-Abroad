<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


    <div class="app-brand demo ">
        <a href="/admin" class="app-brand-link">
            <img src="{{ asset('themes') }}/admin/img/logo/logo.png" alt="" height="30px">

            <span class="app-brand-text demo menu-text fw-semibold ms-2">𝐄𝐥𝐞𝐠𝐚𝐧𝐭</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item @yield('menu-item-dashboard')">
            <a href="/admin" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                <div data-i18n="Bảng điều khiển">Bảng điều khiển</div>
                <div class="badge bg-danger rounded-pill ms-auto">5</div>
            </a>
        </li>
        <!-- Apps & Pages -->
        <li class="menu-header fw-medium mt-4">
            <span class="menu-header-text" data-i18n="Apps & Pages">Apps &amp; Pages</span>
        </li>

        <li class="menu-item @yield('menu-item-post')">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons mdi mdi-post'></i>
                <div data-i18n="Danh mục">Danh mục</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item @yield('menu-sub-create-post')">
                    <a href="{{ route('categories.create') }}" class="menu-link">
                        <div data-i18n="Thêm Danh mục">Thêm Danh mục</div>
                    </a>
                </li>
                <li class="menu-item @yield('menu-sub-index-post')">
                    <a href="{{ route('categories.index') }}" class="menu-link">
                        <div data-i18n="Danh sách Danh mục">Danh sách Danh mục</div>
                    </a>
                </li>


            </ul>
        </li>

        <li class="menu-item @yield('menu-item-contact')">
            <a href="" class="menu-link">
                <i class='menu-icon tf-icons mdi mdi-card-account-mail-outline'></i>
                <div data-i18n="Liên Hệ">Liên Hệ</div>
                <div class="badge bg-danger rounded-pill ms-auto">5</div>
            </a>
        </li>

        <li class="menu-item @yield('menu-item-post')">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons mdi mdi-post'></i>
                <div data-i18n="Trường học">Trường học</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item @yield('menu-sub-create-post')">
                    <a href="{{route('schools.create')}}" class="menu-link">
                        <div data-i18n="Thêm trường học">Thêm trường học</div>
                    </a>
                </li>
                <li class="menu-item @yield('menu-sub-index-post')">
                    <a href="{{route('schools.index')}}" class="menu-link">
                        <div data-i18n="Danh sách bài viết">Danh sách bài viết</div>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</aside>
