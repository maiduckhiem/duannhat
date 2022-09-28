<!DOCTYPE html>
<html lang="en">

<head>
    <title>Danh sách đơn hàng | Quản trị Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/main2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

</head>

<body onload="time()" class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header">
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">


            <!-- User Menu-->
            <li><a class="app-nav__item" href="/index.html"><i class='bx bx-log-out bx-rotate-180'></i> </a>

            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="/images/hay.jpg" width="50px" alt="User Image">
            <div>
                <p class="app-sidebar__user-name"><b>Võ Trường</b></p>
                <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
            </div>
        </div>
        <hr>
        <ul class="app-menu">
            <li><a class="app-menu__item haha" href="#"><i class='app-menu__icon bx bx-cart-alt'></i><span class="app-menu__label">POS Bán Hàng</span></a></li>
            <li><a class="app-menu__item " href="{{route('doashboard.index')}}"><i class='app-menu__icon bx bx-tachometer'></i><span class="app-menu__label">Bảng điều khiển</span></a></li>
            <li><a class="app-menu__item " href="{{route('user.index')}}"><i class='app-menu__icon bx bx-id-card'></i><span class="app-menu__label">Quản lý nhân viên</span></a></li>
            <li><a class="app-menu__item " href="{{route('client.index')}}"><i class='app-menu__icon bx bx-user-voice'></i><span class="app-menu__label">Quản lý khách hàng</span></a></li>
            <li><a class="app-menu__item " href="{{route('product.index')}}"><i class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý sản phẩm</span></a></li>
            <li><a class="app-menu__item " href="{{route('categorys.index')}}"><i class="fas fa-water app-menu__icon"></i><span class="app-menu__label">Danh mục sản phẩm </span></a></li>
            <li><a class="app-menu__item active" href="{{route('slideshow.index')}}"><i class='app-menu__icon bx bx-run'></i><span class="app-menu__label">Quản lý Slideshow</span></a></li>
            <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-task'></i><span class="app-menu__label">Quản lý đơn hàng</span></a></li>
            <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-run'></i><span class="app-menu__label">Quản lý nội bộ</span></a></li>
            <li><a class="app-menu__item " href="{{route('post.index')}}"><i class="fas fa-swatchbook app-menu__icon"></i><span class="app-menu__label">Quản lý Posts</span></a></li>
            <li><a class="app-menu__item " href="{{route('listpost.index')}}"><i class="fab fa-blackberry app-menu__icon"></i><span class="app-menu__label">Danh mục Post</span></a></li>
            <li><a class="app-menu__item " href="{{route('role.index')}}"><i class="fab fa-500px app-menu__icon"></i><span class="app-menu__label">Quản lý quyền</span></a></li>
            <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-dollar'></i><span class="app-menu__label">Bảng kê lương</span></a></li>
            <li><a class="app-menu__item" href="{{route('statistical.index')}}"><i class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Báo cáo doanh thu</span></a></li>
            <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-calendar-check'></i><span class="app-menu__label">Lịch công tác </span></a></li>
            <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-cog'></i><span class="app-menu__label">Cài đặt hệ thống</span></a></li>
        </ul>
    </aside>
    <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item">Quản lý Slideshow</li>
                <li class="breadcrumb-item"><a href="#">Tạo mới</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Tạo mới Slideshow</h3>
                    <div class="tile-body">
                        <form method="post" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label class="control-label">Image</label>
                                    <input class="form-control" type="file" name="image">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="control-label">Link liên kết</label>
                                    <input class="form-control" type="text" name="link_lk">
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-save" type="submit">Lưu lại</button>
                                <a class="btn btn-cancel" href="/doc/table-data-banned.html">Hủy bỏ</a>
                            </div>
                        </form>
                        <div class="tile-footer">
                        </div>
                    </div>
                </div>
    </main>

    <!--
  MODAL
-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="row">
                        <div class="form-group  col-md-12">
                            <span class="thong-tin-thanh-toan">
                                <h5>Tạo trình trạng mới</h5>
                            </span>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Nhập tình trạng</label>
                            <input class="form-control" type="text" required>
                        </div>
                    </div>
                    <BR>
                    <button class="btn btn-save" type="button">Lưu lại</button>
                    <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
                    <BR>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!--
MODAL
-->

    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>

</body>

</html>