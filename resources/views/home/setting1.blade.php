<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/79e1832a3e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.15.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" href="{{ asset('website') }}/index.css" />
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
</head>

<body>
    <!-- header -->
    <div class="bg-amber-600 hidden lg:block sticky top-0 z-10" style="background: #001c40;">
        <div class="containers py-4">
            <div class="grid grid-cols-12 gap-10">
                <div class="col-span-3 lg:col-span-2 mx-auto">
                    <a href="{{route('home')}}">
                        <img class="h-10" src="{{asset('storage/anhweb/logo.png')}}" alt="" />
                    </a>
                </div>
                <div class="col-span-7">
                    <div class="relative">
                        <input type="text" class="w-full p-1 mt-1 pr-20 rounded-md" />
                        <i class="fas fa-search absolute top-3 right-6"></i>
                    </div>
                </div>
                <div class="col-span-3 lg:ml-auto flex gap-10 mt-1">
                    <div class="text-2xl text-white relative hidden lg:block" x-data="{ open: false }" @mouseleave="open = false">
                        <div @mouseover="open = true">
                            <i class="fas fa-user"></i>
                        </div>

                        <div class="absolute bg-white w-52 right-0 mt-2 bg-white shadow-xl" x-show="open" x-transition.scale.origin.right>
                            <div class="py-2 px-5">
                                <a href="#" class="block p-1 text-gray-700">
                                    <i class="fas fa-user text-xl"></i>
                                    <span class="ml-2 text-sm">Profile</span>
                                </a>
                                <a href="#" class="block p-1 text-gray-700">
                                    <i class="fas fa-cog text-xl"></i>
                                    <span class="ml-2 text-sm">Settings</span>
                                </a>
                                <a href="#" class="block p-1 text-gray-700">
                                    <i class="fas fa-sign-out-alt text-xl"></i>
                                    <span class="ml-2 text-sm">Logout</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="hidden lg:block">
                        <i class="fas fa-gavel text-2xl text-white"></i>
                    </div>
                    <!-- giỏ hàng -->
                    <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
                        <div @mouseover="open = true">
                            <i class="fab fa-opencart text-2xl text-white block"></i>
                        </div>
                        <div x-show="open" x-transition.scale.origin.right class="absolute bg-white w-72 right-0 py-24 mt-2 bg-white shadow-xl">
                            <img class="w-full px-20" src="./image/cart-empty.svg" alt="" />
                            <div class="text-center">
                                <h4 class="font-bold mt-3">Giỏ hàng trống!</h4>
                                <p class="text-xs mt-3">
                                    không có sản phẩm trong giỏ hàng của bạn
                                </p>
                            </div>
                        </div>
                    </div>
                    <div x-data="{ open: false }" @mouseleave="open = false" class="relative hidden lg:block">
                        <div @mouseover="open = true">
                            <i class="fas fa-bell text-2xl text-white"></i>
                        </div>
                        <div x-show="open" x-transition.scale.origin.right class="absolute bg-white w-72 pb-32 right-0 pt-5 pl-5 mt-2 bg-white shadow-xl">
                            <h4 class="font-bold">Thông báo</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden lg:block">
        <div class="containers grid grid-cols-12 py-3">
            <div class="col-span-2 flex border-r pl-3 border-gray-400">
                <i class="fas fa-bars mt-1 mr-3"></i>
                <h4 class="">Tất cả danh mục</h4>
            </div>
            <div class="col-span-8 flex px-10 gap-10">
                <div>
                    <a class="flex" href="#">
                        <i class="fab fa-battle-net text-xl text-amber-600 mr-2" style="color: #001c40;"></i>
                        <h4 class="font-bold">Market</h4>
                    </a>
                </div>
                <div>
                    <a class="flex" href="#">
                        <i class="fas fa-truck text-amber-600 text-xl mr-2" style="color: #001c40;"></i>
                        <h4 class="font-bold">Express</h4>
                    </a>
                </div>
                <div>
                    <a class="flex" href="#">
                        <i class="fas fa-fire-alt text-amber-600 text-xl mr-2" style="color: #001c40;"></i>
                        <h4 class="mt-1 font-bold">Ưu đãi</h4>
                    </a>
                </div>
            </div>
            <div class="col-span-2 flex">
                <i class="fas fa-home text-xl text-amber-600 mr-2" style="color: #001c40;"></i>
                <h4 class="font-bold mt-1">Bán ở nhật bản</h4>
            </div>
        </div>
    </div>
    <div class="bg-gray-200 py-3 lg:block hidden">
        <div class="containers">
            <a href="#">
                <div class="text-sm flex hover:text-amber-600">
                    <i class="fas fa-home text-sm mr-3"></i>
                    <div class="">Trang chủ</div>
                </div>
            </a>
        </div>
    </div>
    <!-- end header -->
    <!-- content -->
    <div class="containers">
        <div class="grid grid-cols-12 mt-10 gap-10">
            <div class="col-span-3">
                <ul class="border border-gray-300">
                    <a href="{{route('setting')}}">
                        <li class="border-b border-gray-300 px-3 py-2 bg-gray-300 text-sm font-medium hover:text-yellow-700">
                            Thông tin người dùng
                        </li>
                    </a>
                    <a href="{{route('setting1')}}">
                        <li class="border-b border-gray-300 px-3 py-2 text-sm font-medium hover:text-yellow-700">
                            Đổi mật khẩu
                        </li>
                    </a>
                </ul>
            </div>
            <div class="col-span-9">
                <h3 class="font-bold text-2xl">Thông tin người dùng</h3>
                <p class="mt-3 text-sm border-b border-gray-300 pb-2">
                    Quản lý thông tin hồ sơ để bảo mật tài khoản của bạn
                </p>
                <form action="" method="post" >
                    @csrf
                    <div class="px-20 mt-5 text-sm">
                        <div class="flex py-5 form-control--oneline gap-10">
                            <h4 class="w-28">Mật khẩu cũ</h4>
                            <input class="w-96 border-b-2 border-gray-300 pb-1" type="text" name=">password_confirmation" />
                        </div>
                        <div class="flex py-5 form-control--oneline gap-10">
                            <h4 class="w-28">Mật khẩu mới</h4>
                            <input class="w-96 border-b-2 border-gray-300 pb-1" type="text" />
                        </div>
                       
                        <p class="text-xs text-gray-500">
                            * Nhập ngày sinh của bạn để nhận hàng trăm khuyến mãi và phiếu giảm giá đặc biệt từ
                            Order247.
                        </p>
                        <button type="submit" class="mt-14 bg-blue-600 text-white px-10 py-2" >Xác nhận</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="bg-gray-100 mt-20 hidden lg:block">
        <div class="border-b border-t border-gray-300">
            <div class="grid grid-cols-5 mt-10 containers py-7 gap-5">
                <div class="">
                    <h4 class="font-bold">Liên hệ</h4>
                    <div class="flex mt-5">
                        <i class="fas fa-map-marker-alt mt-1 mr-3"></i>
                        <div>
                            <h4 class="font-bold text-sm">Địa Chỉ:</h4>
                            <h4 class="text-sm">
                                〒136-0075 Tokyo, Koto City, Shinsuna, 3 Chome−10−8, 1F Warehouse 3
                            </h4>
                        </div>
                    </div>
                    <div class="flex mt-3">
                        <i class="fas fa-envelope mt-1 mr-2"></i>
                        <div>
                            <h4 class="font-bold text-sm">Email</h4>
                            <h5 class="text-sm hover:text-yellow-600">
                                <a href="">duckhiem110@gmail.com</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="">
                    <h4 class="font-bold">Về chúng tôi</h4>
                    <div class="mt-5">
                        <h4 class="text-sm mt-2"><a href="">Về chúng tôi</a></h4>
                        <h4 class="text-sm mt-2"><a href="">Blog</a></h4>
                        <h4 class="text-sm mt-2">
                            <a href="">Điều khoản & Chính sách</a>
                        </h4>
                    </div>
                </div>
                <div class="">
                    <h4 class="font-bold">Dịch vụ khách hàng</h4>
                    <div class="mt-5">
                        <h4 class="text-sm hover:text-yellow-700">
                            <a href="">Trung tâm hỗ trợ</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">Chính sách bảo mật</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">Hàng cấm nhập khẩu</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:tex-yellow-700">
                            Câu hỏi thường gặp
                        </h4>
                        <h4 class="mt-2 text-sm hover:tex-yellow-700">Gửi câu hỏi</h4>
                    </div>
                </div>
                <div class="">
                    <h4 class="font-bold">Thanh Toán & Vận Chuyển</h4>
                    <div class="mt-5">
                        <h4 class="text-sm hover:text-yellow-700">
                            <a href="">Biểu phí dịch vụ</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">Phương thức thanh toán</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">Phí gói</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">Biểu phí lưu kho</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">Phí vận chuyển quốc tế</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">Thủ tục giao hàng</a>
                        </h4>
                    </div>
                </div>
                <div class="">
                    <h4 class="font-bold">Hướng Dẫn Sử Dụng</h4>
                    <div class="mt-5">
                        <h4 class="text-sm hover:text-yellow-700">
                            <a href="">Quy trình mua hàng</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">Quy trình đấu giá</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">Săn phút chót</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">Hướng dẫn đặt hàng nhanh</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">Về J-Point</a>
                        </h4>
                        <h4 class="mt-2 text-sm hover:text-yellow-700">
                            <a href="">Tín dụng đấu giá</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="containers py-5">
            <div class="flex">
                <h4 class="font-bold mt-1">Kết nối với tôi</h4>
                <div class="flex gap-5 ml-10">
                    <img class="w-8" src="./image/facebook.png" alt="" />
                    <img class="w-8" src="./image/ter.png" alt="" />
                    <img class="w-8" src="./image/intagam.png" alt="" />
                    <img class="w-8" src="./image/yout.png" alt="" />
                </div>
            </div>
        </div>
        <div class="bg-amber-500">
            <div class="containers">
                <h5 class="text-center py-2 text-white">
                    Copyright © 2022 - 2024 Chung Toi. All Rights Reserved
                </h5>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
            var check1 = Document.getElementById("check1");
            var check1 = Document.getElementById("check2");
            var check1 = Document.getElementById("check3");
        }
    </script>
</body>

</html>