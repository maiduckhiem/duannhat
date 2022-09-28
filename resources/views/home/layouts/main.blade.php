<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('header-title')</title>
  @include('home.layouts.style')
</head>

<body>
  <!-- loading -->
  <div class="loader h-screen z-20 w-full bg-white  fixed justify-center items-center  left-0 top-0" style="width: 100%;
height: 100vh; position: fixed;
top: 0;
left: 0;
display: flex;
align-items: center;
justify-content: center;">
    <img style="width:200px;" src="{{asset('storage/anhweb/loader.gif')}}" alt="">
  </div>
  <div class="content " style="display: none;">
    @include('home.layouts.header')
    <!-- end header -->
    <!-- danh sach -->
    @yield('content')
    @include('home.layouts.footer')
  </div>
</body>
@include('home.layouts.script')

</html>