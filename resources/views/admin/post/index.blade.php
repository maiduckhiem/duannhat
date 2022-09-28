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
      <li><a class="app-menu__item" href="{{route('carts.index')}}"><i class='app-menu__icon bx bx-task'></i><span class="app-menu__label">Quản lý đơn hàng</span></a></li>
      <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-run'></i><span class="app-menu__label">Quản lý nội bộ</span></a></li>
      <li><a class="app-menu__item active" href="{{route('post.index')}}"><i class="fas fa-swatchbook app-menu__icon"></i><span class="app-menu__label">Quản lý Posts</span></a></li>
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

                <a class="btn btn-add btn-sm" href="{{route('post.add')}}" title="Thêm"><i class="fas fa-plus"></i>
                  Tạo mới</a>
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
                  <th>ID bài viết</th>
                  <th>Tiêu đề</th>
                  <th>Nội dung phụ</th>
                  <th>Nội dung chính</th>
                  <th>Người tạo</th>
                  <th>Email</th>
                  <th>Ảnh</th>
                  <th>Danh mục</th>
                  <th>Số điện thoại</th>
                  <th>Tính năng</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($post as $item)
                <tr>
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->tieu_de}}</td>
                  <td>{{$item->content1}}</td>
                  <td>{{$item->content2}} </td>
                  <td>{{$item->author}}</td>
                  <td>{{$item->email}}</td>
                  <td><img src="{{asset('storage/'.$item->image)}}" width="100"></td>
                  <td>{{$item->listpost->name}}</td>
                  <td>{{$item->phone_number}}</td>
                  <td class="table-td-center"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                    </button>
                    <button onclick="getPost({{$item->id}})" class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>
                    </button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{$post->links('vendor.pagination.custom')}}
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
                <h5>Chỉnh sửa thông tin nhân viên cơ bản</h5>
              </span>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label class="control-label">ID bài viết</label>
              <input class="form-control id" type="text" required disabled>
            </div>
            <div class="form-group col-md-6">
              <label class="control-label">Tiêu đề</label>
              <input class="form-control name" type="text" required>
            </div>
            <div class="form-group  col-md-6">
              <label class="control-label">Số điện thoại</label>
              <input class="form-control phone" type="number" required>
            </div>
            <div class="form-group  col-md-6">
              <label class="control-label">Ảnh</label>
              <input class="form-control image" id="iamgeProfile" type="file">
            </div>
            <div class="form-group  col-md-6">
              <label class="control-label">Nội dung chính</label>
              <input class="form-control content" type="text">
            </div>
            <div class="form-group  col-md-6">
              <label class="control-label">Nội dung phụ</label>
              <input class="form-control content1" type="text">
            </div>
            <div class="form-group col-md-6">
              <label class="control-label">Địa chỉ email</label>
              <input class="form-control email" type="text" required>
            </div>
            <div class="form-group col-md-6">
              <label class="control-label">Người tạo</label>
              <input class="form-control people" type="text">
            </div>
            <div class="form-group col-md-6">
              <label class="control-label">Danh mục</label>
              <select class="form-control  category" ></select>
            </div>
          </div>
          <button onclick="editUsser()" class="btn btn-save" type="button">Lưu lại</button>
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
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="src/jquery.table2excel.js"></script>
  <script src="js/main.js"></script>
  <!-- Data table plugin-->
  <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript">
    $('#sampleTable').DataTable();
  </script>
  <script>
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
    //Sao chép dữ liệu
    var copyTextareaBtn = document.querySelector('.js-textareacopybtn');

    copyTextareaBtn.addEventListener('click', function(event) {
      var copyTextarea = document.querySelector('.js-copytextarea');
      copyTextarea.focus();
      copyTextarea.select();

      try {
        var successful = document.execCommand('copy');
        var msg = successful ? 'successful' : 'unsuccessful';
        console.log('Copying text command was ' + msg);
      } catch (err) {
        console.log('Oops, unable to copy');
      }
    });
    //get data from table
    function getPost(id) {
      $.get(`/api/posts/edit/${id}`, function(data, status) {
        console.log(data);
        $('.modal-body .row .id').val(data.post.id);
        $('.modal-body .row .name').val(data.post.tieu_de);
        $('.modal-body .row .phone').val(data.post.phone_number);
        $('.modal-body .row .email').val(data.post.email);
        $('.modal-body .row .content').val(data.post.content2);
        $('.modal-body .row .content1').val(data.post.content1);
        $('.modal-body .row .people').val(data.post.author);
        data.listpost.forEach(function(item, index) {
          $('.category').append(`<option value="${item.id}">${item.name}</option>`);
        });
      });
    }
    //edit data
    function editUsser() {
      var id = $('.modal-body .row .id').val();
      var name = $('.modal-body .row .name').val();
      var phone = $('.modal-body .row .phone').val();
      var email = $('.modal-body .row .email').val();
      var content = $('.modal-body .row .content').val();
      var content1 = $('.modal-body .row .content1').val();
      var people = $('.modal-body .row .people').val();
      var category = $('.modal-body .row .category').val();
      var updateImage = document.getElementById('iamgeProfile');
      var data = {
        id: id,
        tieu_de: name,
        phone_number: phone,
        email: email,
        content2: content,
        content1: content1,
        listpostid: category,
        author: people,
      }
      console.log(data);
      $.post(`/api/posts/edit/${id}`, data, function(data, status) {
        $('.modal-body .row .id').val(data.posts.id);
        $('.modal-body .row .name').val(data.post.tieu_de);
        $('.modal-body .row .phone').val(data.post.phone_number);
        $('.modal-body .row .email').val(data.post.email);
        $('.modal-body .row .category').val(data.post.listpostid);
        $('.modal-body .row .content').val(data.post.content2);
        $('.modal-body .row .content1').val(data.post.content1);
        $('.modal-body .row .people').val(data.post.author);
      });
      let files = updateImage.files[0]
      let dataFile = new FormData()
      dataFile.append("image", files)
      $.ajax({
        type: 'POST',
        url: `/api/posts/add/image/${id}`,
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