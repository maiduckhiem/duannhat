<!DOCTYPE html>
<html lang="en">

<head>
    <title>Danh sách đơn hàng | Quản trị Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/main2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
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
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{ asset('storage/') }}/{{Auth::user()->avatar}}" width="50px" alt="User Image">
            <div>
                <p class="app-sidebar__user-name"><b>{{Auth::user()->name}}</b></p>
                <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
            </div>
        </div>
        <hr>
        <ul class="app-menu">
            <li><a class="app-menu__item haha" href="#"><i class='app-menu__icon bx bx-cart-alt'></i><span class="app-menu__label">POS Bán Hàng</span></a></li>
            <li><a class="app-menu__item " href="{{route('doashboard.index')}}"><i class='app-menu__icon bx bx-tachometer'></i><span class="app-menu__label">Bảng điều khiển</span></a></li>
            <li><a class="app-menu__item " href="{{route('user.index')}}"><i class='app-menu__icon bx bx-id-card'></i><span class="app-menu__label">Quản lý nhân viên</span></a></li>
            <li><a class="app-menu__item" href="{{route('client.index')}}"><i class='app-menu__icon bx bx-user-voice'></i><span class="app-menu__label">Quản lý khách hàng</span></a></li>
            <li><a class="app-menu__item " href="{{route('product.index')}}"><i class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý sản phẩm</span></a></li>
            <li><a class="app-menu__item" href="{{route('categorys.index')}}"><i class="fas fa-water app-menu__icon"></i><span class="app-menu__label">Danh mục sản phẩm </span></a></li>
            <li><a class="app-menu__item" href="{{route('slideshow.index')}}"><i class='app-menu__icon bx bx-run'></i><span class="app-menu__label">Quản lý Slideshow</span></a></li>
            <li><a class="app-menu__item active" href="{{route('carts.index')}}"><i class='app-menu__icon bx bx-task'></i><span class="app-menu__label">Quản lý đơn hàng</span></a></li>
            <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-run'></i><span class="app-menu__label">Quản lý nội bộ</span></a></li>
            <li><a class="app-menu__item" href="{{route('post.index')}}"><i class="fas fa-swatchbook app-menu__icon"></i><span class="app-menu__label">Quản lý Posts</span></a></li>
            <li><a class="app-menu__item" href="{{route('listpost.index')}}"><i class="fab fa-blackberry app-menu__icon"></i><span class="app-menu__label">Danh mục Post</span></a></li>
            <li><a class="app-menu__item " href="{{route('role.index')}}"><i class="fab fa-500px app-menu__icon"></i><span class="app-menu__label">Quản lý quyền</span></a></li>
            <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-dollar'></i><span class="app-menu__label">Bảng kê lương</span></a></li>
            <li><a class="app-menu__item" href="{{route('statistical.index')}}"><i class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Báo cáo doanh thu</span></a></li>
            <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-calendar-check'></i><span class="app-menu__label">Lịch công tác </span></a></li>
            <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-cog'></i><span class="app-menu__label">Cài đặt hệ thống</span></a></li>
        </ul>
    </aside>
    <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách đơn hàng</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">
                                <a href="" class="btn bg-black text-white w-48 text-left">Tổng bộ : ({{$carts->count()}}) </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="" class="btn bg-yellow-500 text-white w-48 text-left">Đã đặt cọc : ({{$spdc->count()}}) </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="" class="btn bg-orange-500 text-white w-48 text-left">Đang xử lý : ({{$spxl->count()}}) </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="" class="btn bg-lime-500 text-white w-48 text-left">Đã thanh toán : ({{$sptt->count()}}) </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="" class="btn bg-cyan-500 text-white w-48 text-left">Người bán giao : ({{$spnbg->count()}}) </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="" class="btn bg-indigo-500 text-white w-48 text-left">Kho : ({{$spk->count()}}) </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="" class="btn bg-green-500 text-white w-48 text-left">Đang vận chuyển : ({{$spdvc->count()}}) </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="" class="btn bg-red-600 text-white w-48 text-left">Kho Việt Nam : ({{$spkvn->count()}}) </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="" class="btn bg-lime-500 text-white w-48 text-left">Sẵn sàng giao : ({{$spssg->count()}}) </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="" class="btn bg-amber-600 text-white w-48 text-left">Chờ xử lý khiếu nại : ({{$spxlkn->count()}}) </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="" class="btn bg-lime-800 text-white w-48 text-left">Đang giao hàng : ({{$spdgh->count()}}) </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="" class="btn bg-fuchsia-900 text-white w-48 text-left">Đã kết thúc : ({{$spdkt->count()}}) </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="" class="btn bg-red-900 text-white w-48 text-left">Đã hủy : ({{$spdh->count()}}) </a>
                            </div>
                        </div>
                        <div class="row element-button">
                            <div class="col-sm-2">
                                <a class="btn btn-delete btn-sm print-file" type="button" title="In" onclick="myApp.printTable()"><i class="fas fa-print"></i> In dữ liệu</a>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-delete btn-sm print-file js-textareacopybtn" type="button" title="Sao chép"><i class="fas fa-copy"></i> Sao chép</a>
                            </div>

                            <div class="col-sm-2">
                                <a class="btn btn-excel btn-sm" href="#" title="In"><i class="fas fa-file-excel"></i> Xuất Excel</a>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-delete btn-sm pdf-file" type="button" title="In" onclick="myFunction(this)"><i class="fas fa-file-pdf"></i> Xuất PDF</a>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-excel btn-sm" href="{{route('carts.add')}}" > Tạo mới</a>
                            </div>
                        </div>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>ID đơn hàng</th>
                                    <th>Mã Đơn Hàng</th>
                                    <th>Khách hàng</th>
                                    <th>Đơn hàng</th>
                                    <th>SĐT</th>
                                    <th>Số lượng</th>
                                    <th>Địa chỉ</th>
                                    <th>Tổng tiền</th>
                                    <th>Tình trạng</th>
                                    <th>Tính năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carts as $item)
                                <tr>
                                    <td>{{($carts->currentPage() - 1)*$carts->perPage() + $loop->iteration}}</td>
                                    <td>{{$item->ma_sp}}</td>
                                    <td>{{$item->name}}</td>
                                    @if ($item->name_product != null)
                                    <td>{{$item->name_product}}</td>
                                    @else
                                    <td>{{$item->cartdetail->name_product}}</td>
                                    @endif
                                    <td>{{$item->phone_number}}</td>
                                    <td>{{$item->count}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>{{number_format($item->total_price, 0)}} VNĐ</td>
                                    @if ($item->status == 1)
                                    <td><span class="badge bg-success">{{$item->statusdetail->name}}</span></td>
                                    @elseif($item->status == 2)
                                    <td><span class="badge bg-orange-500">{{$item->statusdetail->name}}</span></td>
                                    @elseif($item->status == 3)
                                    <td><span class="badge bg-lime-500">{{$item->statusdetail->name}}</span></td>
                                    @elseif($item->status == 4)
                                    <td><span class="badge bg-indigo-500">{{$item->statusdetail->name}}</span></td>
                                    @elseif($item->status == 5)
                                    <td><span class="badge bg-indigo-500">{{$item->statusdetail->name}}</span></td>
                                    @elseif($item->status == 6)
                                    <td><span class="badge bg-indigo-500">{{$item->statusdetail->name}}</span></td>
                                    @elseif($item->status == 7)
                                    <td><span class="badge bg-green-500">{{$item->statusdetail->name}}</span></td>
                                    @elseif($item->status == 8)
                                    <td><span class="badge bg-red-600">{{$item->statusdetail->name}}</span></td>
                                    @elseif($item->status == 9)
                                    <td><span class="badge bg-lime-500">{{$item->statusdetail->name}}</span></td>
                                    @elseif($item->status == 10)
                                    <td><span class="badge bg-amber-600">{{$item->statusdetail->name}}</span></td>
                                    @elseif($item->status == 11)
                                    <td><span class="badge bg-lime-800 ">{{$item->statusdetail->name}}</span></td>
                                    @elseif($item->status == 12)
                                    <td><span class="badge bg-fuchsia-900">{{$item->statusdetail->name}}</span></td>
                                    @else
                                    <td><span class="badge bg-red-900 ">{{$item->statusdetail->name}}</span></td>
                                    @endif
                                    <td>
                                        <a class="btn btn-primary btn-sm text-green-500" id="show-emp" onclick="getCart({{$item->id}})" data-target="#ModalUP1" data-toggle="modal"><i class="fas fa-info-circle"></i></a>
                                        <button type="submit" class="btn btn-primary btn-sm edit" title="Sửa" onclick="getCart1({{$item->id}})" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$carts->links('vendor.pagination.custom')}}
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--
  MODAL
-->
    <div class="modal fade" id="ModalUP" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group  col-md-12">
                            <span class="thong-tin-thanh-toan">
                                <h5>Chỉnh sửa thông tin sản phẩm cơ bản</h5>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="control-label">ID sản phẩm</label>
                            <input class="form-control id" type="text" required disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Tên sản phẩm</label>
                            <input class="form-control name" type="text" required disabled>
                        </div>
                        <div class="form-group  col-md-6">
                            <label class="control-label">Số lượng</label>
                            <input class="form-control number" type="number" required disabled value="20">
                        </div>

                        <div class="form-group col-md-6 ">
                            <label for="">Sản phẩm Nổi Bật</label>
                            <input class="form-control phone" type="text" name="" id="" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Giá bán</label>
                            <input class="form-control price" type="text" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Link sản phẩm</label>
                            <input type="text" name="link_sp" placeholder="Điền link sản phẩm" class="form-control link" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleSelect1" class="control-label">Trạng thái sản phẩm</label>
                            <select class="form-control status" id="exampleSelect1">

                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Địa chỉ</label>
                            <input type="text" class="form-control address" disabled>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Mô tả sản phẩm</label>
                            <textarea class="form-control description" id="mota" name="description"></textarea>
                            <script>
                                CKEDITOR.replace('mota');
                            </script>
                        </div>
                    </div>
                    <button class="btn btn-save" onclick="editCart()" type="button">Lưu lại</button>
                    <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!--
MODAL
-->
    <!--
  MODAL 2
-->
    <div class="modal fade" id="ModalUP1" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered  mx-auto justify-center  " role="document">
            <div class="modal-content mx-auto " style="width:900px;">
                <div class="modal-body " style="width:900px;">
                    <div class="row">
                        <div class="form-group  col-md-12">
                            <span class="thong-tin-thanh-toan">
                                <h5>Chi tiết đơn hàng</h5>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="control-label">Mã sản phẩm</label>
                            <input class="form-control id" type="text" required value="#CD2187" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Họ tên</label>
                            <input class="form-control name" type="text" required disabled>
                        </div>
                        <div class="form-group  col-md-6">
                            <label class="control-label">Số lượng</label>
                            <input class="form-control number" type="number" required value="20" disabled>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleSelect1" class="control-label">Tình trạng sản phẩm</label>
                            <input class="form-control status" type="text" value="Đã thanh toán" required disabled>
                        </div>
                        <div class="form-group col-md-10 ">
                            <label class="control-label">Đơn hàng</label>
                            <input class="form-control donhang" value="Bàn ăn mở rộng Gepa" type="text" required disabled>
                        </div>
                        <div class="form-group col-md-2 ">
                            <label class="control-label">Giá đơn</label>
                            <input class="form-control donhang" value="1233" type="text" required disabled>
                        </div>
                        <div class="form-group col-md-10 ">
                            <input class="form-control donhang" type="text" required disabled>
                        </div>
                        <div class="form-group col-md-2 ">
                            <input class="form-control donhang" type="text" required disabled>
                        </div>
                        <div class="form-group col-md-10 ">
                            <input class="form-control donhang" type="text" required disabled>
                        </div>
                        <div class="form-group col-md-2 ">
                            <input class="form-control donhang" type="text" required disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">tổng tiền</label>
                            <input class="form-control price" type="text" disabled>
                        </div>

                        <!-- \image -->
                        <div class="form-group col-md-6">
                            <label class="control-label">Ảnh sản phẩm</label>
                            <input type="file" class="form-control image" name="image" value="image" id="image" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Link sản phẩm</label>
                            <input type="text" name="link_sp" placeholder="Điền link sản phẩm" class="form-control link" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleSelect1" class="control-label">Danh mục</label>
                            <input type="text" placeholder="Điền link sản phẩm" class="form-control category" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleSelect1" class="control-label">Ngày đặt</label>
                            <input type="text" class="form-control date" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleSelect1" class="control-label">SĐT</label>
                            <input type="text" class="form-control phone" disabled>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleSelect1" class="control-label">Địa chỉ</label>
                            <input type="text" class="form-control address" disabled>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Mô tả sản phẩm</label>
                            <textarea class="form-control description" id="mota" name="description" disabled></textarea>
                            <script>
                                CKEDITOR.replace('mota');
                            </script>
                        </div>
                    </div>
                    <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
                </div>
            </div>
        </div>
    </div>
    <!--
MODAL
-->
<script src="js/popper.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="src/jquery.table2excel.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script>
        function deleteRow(r) {
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById("myTable").deleteRow(i);
        }
        jQuery(function() {
            jQuery(".trash").click(function() {
                swal({
                        title: "Cảnh báo",

                        text: "Bạn có chắc chắn là muốn xóa đơn hàng này?",
                        buttons: ["Hủy bỏ", "Đồng ý"],
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            swal("Đã xóa thành công.!", {

                            });
                        }
                    });
            });
        });
        oTable = $('#sampleTable').dataTable();
        $('#all').click(function(e) {
            $('#sampleTable tbody :checkbox').prop('checked', $(this).is(':checked'));
            e.stopImmediatePropagation();
        });


        //Thời Gian
        function time() {
            var today = new Date();
            var weekday = new Array(7);
            weekday[0] = "Chủ Nhật";
            weekday[1] = "Thứ Hai";
            weekday[2] = "Thứ Ba";
            weekday[3] = "Thứ Tư";
            weekday[4] = "Thứ Năm";
            weekday[5] = "Thứ Sáu";
            weekday[6] = "Thứ Bảy";
            var day = weekday[today.getDay()];
            var dd = today.getDate();
            var mm = today.getMonth() + 1;
            var yyyy = today.getFullYear();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            nowTime = h + " giờ " + m + " phút " + s + " giây";
            if (dd < 10) {
                dd = '0' + dd
            }
            if (mm < 10) {
                mm = '0' + mm
            }
            today = day + ', ' + dd + '/' + mm + '/' + yyyy;
            tmp = '<span class="date"> ' + today + ' - ' + nowTime +
                '</span>';
            document.getElementById("clock").innerHTML = tmp;
            clocktime = setTimeout("time()", "1000", "Javascript");

            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i;
                }
                return i;
            }
        }
        //In dữ liệu
        var myApp = new function() {
            this.printTable = function() {
                var tab = document.getElementById('sampleTable');
                var win = window.open('', '', 'height=700,width=700');
                win.document.write(tab.outerHTML);
                win.document.close();
                win.print();
            }
        }

        //Modal
        $("#show-emp").on("click", function() {
            $("#ModalUP").modal({
                backdrop: false,
                keyboard: false
            })
        });
        $("#show-emp1").on("click", function() {
            $("#ModalUP1").modal({
                backdrop: false,
                keyboard: false
            })
        });
        //get data from modal
        function getCart(id) {
            $.get(`/api/cart/edit/${id}`, function(data) {
                $(".id").val(data.cart.ma_sp);
                $(".name").val(data.cart.name);
                $(".price").val(data.cart.total_price);
                $(".quantity").val(data.cart.quantity);
                $(".image").val(data.cart.image);
                $(".mota").val(data.cart.mota);
                $(".phone").val(data.cart.phone_number);
                $(".address").val(data.cart.address);
                $(".date").val(data.cart.created_at);
                $(".status").val(data.cart.status);
                $(".number").val(data.cart.count);

            });
        }
        //get data from modal
        function getCart1(id) {
            $.get(`/api/cart/edit/${id}`, function(data) {
                $(".id").val(data.cart.id);
                $(".name").val(data.cart.name);
                $(".price").val(data.cart.total_price);
                $(".quantity").val(data.cart.quantity);
                $(".image").val(data.cart.image);
                $(".mota").val(data.cart.mota);
                $(".phone").val(data.cart.phone_number);
                $(".address").val(data.cart.address);
                $(".date").val(data.cart.created_at);
                $(".status").val(data.cart.status);
                $(".number").val(data.cart.count);
                data.status.forEach(element => {
                    $(".modal-body .row .status").append(`<option value="${element.id}">${element.name}</option>`);
                });
            });
        }
        //update data
        function editCart() {
            var id = $(".id").val();
            var status = $(".status").val();
            var data = {
                status: status,
            }
            console.log(data);
            $.post(`/api/cart/edit/${id}`, data, function(data, status) {
                $(".id").val(data.carts.id);
                $(".status").val(data.carts.status);
            });
            $.ajax({
                type: 'POST',
                url: `/api/cart/edit/${id}`,
                success: (response) => {
                    if (response) {
                        console.log(response);
                    }
                    location.reload();
                }
            });
        }
    </script>
</body>

</html>