<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Shop
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Shop</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('/admin/customer') }}">Khách hàng</a>
                <a class="collapse-item" href="{{ url('/admin/product-order') }}">Đơn hàng</a>
                <a class="collapse-item" href="{{ url('/admin/category-product') }}">Danh mục sản phẩm</a>
                <a class="collapse-item" href="{{ url('/admin/product') }}">Sản phẩm</a>
                <a class="collapse-item" href="{{ url('/admin/product') }}">Đánh giá</a>
                <a class="collapse-item" href="{{ url('/admin/product') }}">Chat support</a>
                <a class="collapse-item" href="{{ url('/admin/product') }}">Nhà xuất bản</a>
                <a class="collapse-item" href="{{ url('/admin/product') }}">Tác giả</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
        <span>Quản trị nội dung</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('/admin/product') }}">Danh mục tin</a>
                <a class="collapse-item" href="{{ url('/admin/product') }}">Danh sách bài viết</a>
                <a class="collapse-item" href="{{ url('/admin/product') }}">Trang tĩnh</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/admin/product') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Danh sách liên hệ</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/admin/product') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Danh sách admin</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/admin/config') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Cấu hình trang web</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
