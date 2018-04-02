<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
        <li class="nav-item start ">
            <a href="admin/product/danhsach" class="nav-link nav-toggle">
                <i class="icon-home"></i>
                <span class="title">Trang chủ</span>
                <span class="arrow"></span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-diamond"></i>
                <span class="title">Quản lý bệnh nhân</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="admin/QuanLyBenhNhan/danhsach" class="nav-link ">
                        <span class="title"><a href="admin/QuanLyBenhNhan/danhsach">Danh sách bệnh nhân</a></span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="admin/QuanLyBenhNhan/them" class="nav-link ">
                        <span class="title"><a href="admin/QuanLyBenhNhan/them">Thêm bệnh nhân</a></span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-diamond"></i>
                <span class="title">Quản lý thuốc</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="admin/QuanLyThuoc/danhsach" class="nav-link ">
                        <span class="title"><a href="admin/QuanLyThuoc/danhsach">Danh sách thuốc</a></span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="admin/QuanLyBenhNhan/them" class="nav-link ">
                        <span class="title"><a href="admin/QuanLyBenhNhan/them">Thêm thuốc</a></span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i>
                <span class="title">Quản lý nhân viên</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="admin/QuanLyNhanVien/danhsach" class="nav-link ">
                        <span class="title">Danh sách nhân viên</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="admin/QuanLyNhanVien/them" class="nav-link ">
                        <span class="title">Thêm nhân viên</span>
                    </a>
                </li>
            
            </ul>
        </li>
        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-pointer"></i>
                <span class="title">Tài khoản</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="admin/users/danhsach" class="nav-link ">
                        <span class="title">Danh sách tài khoản</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="admin/users/them" class="nav-link ">
                        <span class="title">Thêm tài khoản</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- END SIDEBAR MENU -->
</div>