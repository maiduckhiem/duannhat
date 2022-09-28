<!DOCTYPE html>
<html lang="vi">

<head>
  <title>Đăng nhập quản trị | Website quản trị v2.0</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/util.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/main.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="{{asset('storage/anhweb/team.jpg')}}" alt="IMG">
        </div>
        <!--=====TIÊU ĐỀ======-->
        <div class="login100-form validate-form">
          <span class="login100-form-title">
            <b>ĐĂNG NHẬP HỆ THỐNG POS</b>
          </span>
          <!--=====FORM INPUT TÀI KHOẢN VÀ PASSWORD======-->
          <form method="post">
            @csrf
            <div class="wrap-input100 validate-input" style="margin-bottom:0px; ">
              <input class="input100" type="text" placeholder="Tài khoản quản trị" name="email">
              <span class="symbol-input100">
                <i class='bx bx-user'></i>
              </span>

            </div>
            @error('email')
            <span class="focus-input100" style="font-size:12px; margin-top:-10px; color:red;">{{$message}}</span>
            @enderror
            <div class="wrap-input100 validate-input" style="padding-top:14px;margin-bottom:0px;">
              <input autocomplete="off" class="input100" type="password" placeholder="Mật khẩu" name="password" id="password-field">
              <span toggle="#password-field" class="bx fa-fw bx-hide field-icon click-eye"></span>
              <span class="focus-input100"></span>
              <span class="symbol-input100" style="padding-top:12px;">
                <i class='bx bx-key'></i>
              </span>
            </div>
            @error('password')
            <span class="focus-input100" style="font-size:12px; margin-top:-10px; color:red;">{{$message}}</span>
            @enderror

            <!--=====ĐĂNG NHẬP======-->
            <div class="container-login100-form-btn">
              <button style="font-weight: 600; font-size:15.5px; background:#ffd43b; border:1px solid #ffd43b; width:100%;padding-top:7px; padding-bottom:7px; border-radius:5px;" type="submit">Đăng nhập</button>
            </div>
            <div style="display:flex; gap: 50px;">
              <!-- tạo tài khoản -->
              <div class="text-left p-t-12">
                <a class="txt2" href="{{route('register')}}">
                  Tạo tài khoản mới?
                </a>
              </div>
              <!--=====LINK TÌM MẬT KHẨU======-->
              <div class="text-right p-t-12">
                <a class="txt2" href="{{route('resetpassword')}}">
                  Bạn quên mật khẩu?
                </a>
              </div>
            </div>
          </form>
          <!--=====FOOTER======-->
          <div class="text-center p-t-70 txt2">
            Phần mềm quản lý bán hàng <i class="far fa-copyright" aria-hidden="true"></i>
            <script type="text/javascript">
              document.write(new Date().getFullYear());
            </script> <a class="txt2" href="#"> </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Javascript-->
  <script src="/js/main.js"></script>
  <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
  <script src="js/jquery/jquery-3.2.1.min.js"></script>

  <script type="text/javascript">
    //show - hide mật khẩu
    function myFunction() {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text"
      } else {
        x.type = "password";
      }
    }
    $(".click-eye").click(function() {
      $(this).toggleClass("bx-show bx-hide");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });
  </script>
</body>

</html>