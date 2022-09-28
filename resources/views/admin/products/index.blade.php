<!DOCTYPE html>
<html lang="en">

<head>
    <title>Danh sách nhân viên | Quản trị Admin</title>
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
            <li><a class="app-menu__item active" href="{{route('product.index')}}"><i class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý sản phẩm</span></a></li>
            <li><a class="app-menu__item" href="{{route('categorys.index')}}"><i class="fas fa-water app-menu__icon"></i><span class="app-menu__label">Danh mục sản phẩm </span></a></li>
            <li><a class="app-menu__item" href="{{route('slideshow.index')}}"><i class='app-menu__icon bx bx-run'></i><span class="app-menu__label">Quản lý Slideshow</span></a></li>
            <li><a class="app-menu__item" href="{{route('carts.index')}}"><i class='app-menu__icon bx bx-task'></i><span class="app-menu__label">Quản lý đơn hàng</span></a></li>
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
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">
                                <a class="btn btn-add btn-sm" href="{{route('product.add')}}" title="Thêm"><i class="fas fa-plus"></i>
                                    Tạo mới sản phẩm</a>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-delete btn-sm nhap-tu-file" type="button" title="Nhập" onclick="myFunction(this)"><i class="fas fa-file-upload"></i> Tải từ file</a>
                            </div>

                            <div class="col-sm-2">
                                <a class="btn btn-delete btn-sm print-file" type="button" title="In" onclick="myApp.printTable()"><i class="fas fa-print"></i> In dữ liệu</a>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-delete btn-sm print-file js-textareacopybtn" type="button" title="Sao chép"><i class="fas fa-copy"></i> Sao chép</a>
                            </div>

                            <div class="col-sm-2">
                                <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i> Xuất Excel</a>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-delete btn-sm pdf-file" type="button" title="In" onclick="myFunction(this)"><i class="fas fa-file-pdf"></i> Xuất PDF</a>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i> Xóa tất cả </a>
                            </div>
                        </div>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th width="10"><input type="checkbox" id="all"></th>
                                    <th>STT</th>
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Số lượng</th>
                                    <th>Tình trạng</th>
                                    <th>Giá tiền</th>
                                    <th>Sale</th>
                                    <th>Danh mục</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $item)
                                <tr>
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td>{{($product->currentPage() - 1)*$product->perPage() + $loop->iteration}}</td>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td><img src="{{asset('storage/'.$item->image)}}" alt="" width="60px;"></td>
                                    <td>{{$item->quantity}}</td>
                                    <td><span class="badge bg-success">Còn hàng</span></td>
                                    <td>{{$item->price}}</td>
                                    @if ($item->sales == null)
                                    <td>Không</td>
                                    @else
                                    <td>{{$item->sales}}</td>
                                    @endif
                                    <td>{{$item->category->name}}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm trash" onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('product.remove', ['id' => $item->id])}}"><i class="fas fa-trash-alt"></i></a>
                                        <button type="submit" onclick="getProduct({{$item->id}})" class="btn btn-primary btn-sm edit" title="Sửa" name="{{$item->id}}" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$product->links('vendor.pagination.custom')}}
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
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label">ID sản phẩm</label>
                                <input class="form-control id" type="text" required value="#CD2187" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Tên sản phẩm</label>
                                <input class="form-control name" type="text" required value="Bàn ăn gỗ Theresa">
                            </div>
                            <div class="form-group  col-md-6">
                                <label class="control-label">Số lượng</label>
                                <input class="form-control number" type="number" required value="20">
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="exampleSelect1" class="control-label">Tình trạng sản phẩm</label>
                                <select class="form-control" id="exampleSelect1">
                                    <option>Còn hàng</option>
                                    <option>Hết hàng</option>
                                    <option>Đang nhập hàng</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="">Sản phẩm Nổi Bật</label>
                                <select name="status" class="form-control">
                                    <option>-- Chọn tình trạng --</option>
                                    <option value="1">Hot</option>
                                    <option value="0">Bình thường</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Giá bán</label>
                                <input class="form-control price" type="text">
                            </div>
                            <!-- \image -->
                            <div class="form-group col-md-6">
                                <label class="control-label">Ảnh sản phẩm</label>
                                <input type="file" class="form-control image" name="image" value="image" id="image">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Link sản phẩm</label>
                                <input type="text" name="link_sp" placeholder="Điền link sản phẩm" class="form-control link">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleSelect1" class="control-label">Danh mục</label>
                                <select class="form-control category" id="exampleSelect1">

                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Mô tả sản phẩm</label>
                                <textarea class="form-control description" id="mota" name="description"></textarea>
                                <script>
                                    CKEDITOR.replace('mota');
                                </script>
                            </div>
                        </div>
                    </form>
                    <button class="btn btn-save" onclick="editProduct()" type="button">Lưu lại</button>
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
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="src/jquery.table2excel.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $('#sampleTable').DataTable();
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

        // get data from table 
        function getProduct(id) {
            $.get(`/api/edit/${id}`, function(data, status) {
                console.log(data);
                $(".modal-body .row .id").val(data.product.id);
                $(".modal-body .row .name").val(data.product.name);
                $(".modal-body .row .number").val(data.product.quantity);
                $(".modal-body .row .category").val(data.product.category);
                $(".modal-body .row .link").val(data.product.link_sp);
                $(".modal-body .row .price").val(data.product.price);
                $(".modal-body .row .description").val(data.product.description);
                data.category.forEach(element => {
                    $(".modal-body .row .category").append(`<option value="${element.id}">${element.name}</option>`);
                });

            });
        }

        //update data from database

        function editProduct() {
            var id = $(".modal .row .id").val();
            var name = $(".modal-body .row .name").val();
            var number = $(".modal-body .row .number").val();
            var category = $(".modal-body .row .category").val();
            var price = $(".modal-body .row .price").val();
            var link = $(".modal-body .row .link").val();
            var description = $(".modal-body .row .description").val();
            var updateImage = document.getElementById('image');
            var data = {
                name: name,
                link_sp: link,
                quantity: number,
                cate_id: category,
                price: price,
                description: description,
            }
            console.log(data);
            $.post(`/api/edit/${id}`, data, function(data, status) {
                $(".modal .row .id").val(data.user.id);
                $(".modal-body .row .name").val(data.product.name);
                $(".modal-body .row .number").val(data.product.quantity);
                $(".modal-body .row .category").val(data.product.category);
                $(".modal-body .row .price").val(data.product.price);
                $(".modal-body .row .description").val(data.product.description);
            });

            let files = updateImage.files[0]
            let dataFile = new FormData()
            dataFile.append("image", files)
            $.ajax({
                type: 'POST',
                url: `/api/product/add/image/${id}`,
                data: dataFile,
                contentType: false,
                processData: false,
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