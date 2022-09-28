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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="{{ asset('website') }}/index.css" />
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
    <!-- header -->
    <div class="content" style="display: none ">
        <div class="sticky top-0 z-20 lg:block hidden" style="background: #001c40;">
            <div class="containers pt-4 ">
                <div class="grid grid-cols-12 gap-10">
                    <div class="col-span-3 lg:col-span-2 mx-auto">
                        <a href="{{route('home')}}">
                            <img class="h-10" src="{{asset('storage/anhweb/logo.png')}}" alt="" />
                        </a>
                    </div>
                    <div class="col-span-6 lg:col-span-7">
                        <div class="relative">
                            <form action="{{route('search')}}" method="POST">
                                @csrf
                                <input type="text" name="search" class="w-full p-1 mt-1 pr-20 rounded-md" />
                                <button type="submit"><i class="fas fa-search absolute top-3 right-6"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-span-3 lg:ml-auto flex gap-10 mt-1">
                        @if ($user == [])
                        <div class="text-2xl text-white relative hidden lg:block" x-data="{ open: false }" @mouseleave="open = false">
                            <div @mouseover="open = true">
                                <i class="fas fa-user"></i>
                            </div>

                            <div class="absolute bg-white w-52 right-0 mt-2 bg-white shadow-xl" x-show="open" x-transition.scale.origin.right>
                                <div class="py-2 px-5">
                                    <a href="{{route('register')}}" class="block p-1 text-gray-700">
                                        <i class="fas fa-user text-xl"></i>
                                        <span class="ml-2 text-sm">Đăng ký</span>
                                    </a>
                                    <a href="{{route('login')}}" class="block p-1 text-gray-700">
                                        <i class="fas fa-user text-xl"></i>
                                        <span class="ml-2 text-sm">Đăng nhập</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="text-2xl text-white relative hidden lg:block" x-data="{ open: false }" @mouseleave="open = false">
                            <div @mouseover="open = true" class="flex">
                                <img src="{{asset('storage/'.$user['avatar'])}}" class="rounded-full" width="30px">
                                <p class="ml-3 text-sm mt-1">{{$user['name']}}</p>
                            </div>

                            <div class="absolute bg-white w-52 right-0 mt-2 bg-white shadow-xl" x-show="open" x-transition.scale.origin.right>
                                <div class="py-2 px-5">
                                    <a href="#" class="block p-1 text-gray-700">
                                        <i class="fas fa-user text-xl"></i>
                                        <span class="ml-2 text-sm">Cài đặt thông tin</span>
                                    </a>
                                    <a href="#" class="block p-1 text-gray-700">
                                        <i class="fas fa-user text-xl"></i>
                                        <span class="ml-2 text-sm">Sản phẩm yêu thích</span>
                                    </a>
                                    <a href="{{route('logout')}}" class="block p-1 text-gray-700">
                                        <i class="fas fa-user text-xl"></i>
                                        <span class="ml-2 text-sm">Đăng xuất</span>
                                    </a>

                                </div>
                            </div>
                        </div>
                        @endif


                        <div class="hidden lg:block">
                            <i class="fas fa-gavel text-2xl text-white"></i>
                        </div>
                        <!-- icon cart -->
                        <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
                            <div @mouseover="open = true">
                                <i class="fab fa-opencart text-2xl text-white"></i>
                            </div>
                            <div x-show="open" x-transition.scale.origin.right class="absolute bg-whitew-72 w-64 right-0 px-3 py-5  mt-2 bg-white shadow-xl">
                                <div>
                                    <h5 class="font-bold">cart</h5>
                                </div>
                                @foreach ($cart as $item12)
                                <div class="flex gap-3 mt-3">
                                    <a href=""><img class="w-20" src="{{asset('storage/'.$item12['image'])}}" alt=""></a>
                                    <div>
                                        <a href="">
                                            <h5 class="font-bold text-sm hover:text-yellow-500">{{$item12['name']}}</h5>
                                        </a>
                                        <div class="grid grid-cols-2  mt-2">
                                            <div class="text-xs">
                                                <h5 class="font-bold">{{$item12['price']}} ¥</h5>
                                            </div>
                                            <div class="text-xs">
                                                <p class="text-gray-400">Số lượng : <span>{{$item12['quantity']}}</span></p>
                                                <a href="{{route('deletecart',['id'=>$item12['id']])}}"><button class="ml-12"> <i class="fas fa-trash-alt text-red-500 "></i></button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="mt-3 border-t-2 border-gray-300 ">
                                    <a href="{{route('cart')}}"><button class="border-2 border-yellow-500 mt-3 hover:bg-yellow-500 hover:text-white text-center w-full text-yellow-500">view cart</button></a>
                                </div>
                            </div>
                        </div>
                        <div x-data="{ open: false }" @mouseleave="open = false" class="relative hidden lg:block">
                            <div @mouseover="open = true">
                                <i class="fas fa-bell text-2xl text-white"></i>
                            </div>
                            <div x-show="open" x-transition.scale.origin.right class="absolute bg-white w-72 pb-32 right-0 pt-5 pl-5 mt-2 bg-white shadow-xl">
                                <h4 class="font-bold">Thông báo </h4>
                                <div>@if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                    @endif
                                </div>
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
                        <div class="">Trang chủ / <span><a href="{{route('category', ['id' => $product->cate_id])}}">{{$product->category->name}}</a></span> / {{$product->name}}</div>
                    </div>
                </a>
            </div>
        </div>
        <!-- content -->
        <!-- navmobile -->
        <div class=" md:block lg:hidden sticky top-0 z-30">
            <div class="flex  bg-gray-200  ">
                <div class="px-6 py-3 ">
                    <a href="">
                        <i class="fas bg-gray-700 text-white px-4 py-2 text-sm rounded-full fa-angle-left"></i>
                    </a>
                </div>
                <div class="px-6 py-3 ml-auto">
                    <i class="fas bg-gray-700 text-white px-3 text-sm py-2 rounded-full fa-share-alt"></i>
                    <i class="fas bg-gray-700 text-white px-4 text-sm py-2 rounded-full fa-ellipsis-v"></i>
                </div>
            </div>
        </div>
        <div class="containers z-30">
            <div class="grid grid-cols-1 lg:grid-cols-12 lg:mt-10 lg:gap-10">
                <div class="md:px-16 py-5  bg-gray-200 lg:bg-white lg:px-0 lg:col-span-4">
                    <div class="relative z-10 md:z-10 z-99" id="content-wrapper" onmouseover="bigimg(this)" onmouseout="normalImg(this)">
                        <div class="screen-image">
                            <img class="screen-image__img w-full bg-cover " id="featured" src="{{asset('storage/'.$product->image)}}" />
                            <div class="screen-image__cover"></div>
                        </div>
                        <div id="slider" class="slider slider-nav ">
                            <div class="mx-2 ">
                                <img class="thumbnail active w-16 py-3 " src="{{asset('storage/'.$product->image)}}" alt="">
                            </div>
                            @foreach($hasp as $hasp)
                            <div class="mx-2 ">
                                <img class="thumbnail w-16 py-3 " src="{{asset('storage/'.$hasp->image)}}" alt="">
                            </div>
                            @endforeach
                        </div>
                        <button id="slideLeft" class="previous_caro absolute left-0 hidden" style="top: 380px; margin-Left:-100px;"><i class="fas fa-angle-left  bg-black opacity-80 px-3 py-2 rounded-full text-white "></i></button>
                        <button id="slideRight" class="next_caro absolute right-0 hidden" style="top: 380px;margin-Right:-100px;"><i class="fas fa-angle-right  bg-black opacity-80 px-3 py-2 rounded-full text-white "></i></button>

                    </div>
                </div>
                <div class="lg:col-span-8 mt-2 md:mt-3 px-3 md:px-16 lg:px-0">
                    <h1 class="font-bold text-xl">
                        {{$product->name}}
                    </h1>
                    <div class="mt-3 grid grid-cols-2">
                        <div>
                            <div class="stars mb-3">
                                <form action="">
                                    <input class="star star-5" id="star-5" type="radio" name="star" />
                                    <label class="star star-5" for="star-5"></label>
                                    <input class="star star-4" id="star-4" type="radio" name="star" />
                                    <label class="star star-4" for="star-4"></i></label>
                                    <input class="star star-3" id="star-3" type="radio" name="star" />
                                    <label class="star star-3" for="star-3"></label>
                                    <input class="star star-2" id="star-2" type="radio" name="star" />
                                    <label class="star star-2" for="star-2"></label>
                                    <input class="star star-1" id="star-1" type="radio" name="star" />
                                    <label class="star star-1" for="star-1"></label>
                                </form>
                            </div>
                            <p class="text-sm">Đánh giá: <span>129 đánh giá</span></p>
                        </div>
                        <div>
                            <i class="far fa-heart hover:text-red-500 text-xl duration-700"></i>
                            <i class="fas fa-share-alt ml-5 hover:text-red-500 text-xl duration-700"></i>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h5 class="text-sm">Bán bởi : <span>Ordernhat247.vn</span></h5>
                        <h5 class="text-sm">Thương hiệu : <span>Brand: 和光堂</span></h5>
                    </div>
                    <div class="grid grid-cols-2 text-sm mt-5">
                        <div>
                            <h5>Gía hiện tại:</h5>
                            <div class="mt-3">
                                @if($product->sales > 0)
                                <h5 class="text-2xl font-bold">{{ number_format($product->price - ($product->price * $product->sales / 100), 0) }} ¥</h5>
                                <span class="font-bold mt-1 text-gray-400">{{ number_format($product->price, 0) }} ¥</span>
                                @else
                                <span class="font-bold mt-1 text-2xl">{{ number_format($product->price, 0) }} ¥</span>
                                @endif
                            </div>
                        </div>
                        <div>
                            <h5>Thuế: <span class="font-bold">0 %</span></h5>
                            <p class="mt-1">Phí vận chuyển nội địa: Miễn phí vận chuyển</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 mt-10">
                        <div>
                            <h4 class="text-sm font-bold">Số lượng:</h4>
                            <div class="flex mt-3">
                                <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty) & qty > 1 ) result.value--;return false;" class="px-2 py-1 bg-gray-400 text-sm">-</button>
                                <input id="qty" value="1" maxlength="3" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;" autocomplete="off" type="text" class="w-14 py-1 text-center border border-gray-300 text-sm" value="1" />
                                <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" class="px-2 py-1 bg-gray-400 text-sm">+</button>
                            </div>
                            <div>
                                <h4 class="text-sm mt-3">Ghi chú:</h4>
                                <textarea class="w-full py-1 border border-gray-300 text-sm mt-2" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="flex flex-col md:mx-auto mt-5">
                            <a href="{{route('buynow',['id' => $product->id])}}">
                                <button class="bg-blue-500 md:w-44 font-bold text-sm py-2 text-white">
                                    <i class="fab fa-opencart"></i> MUA NGAY
                                </button>
                            </a>
                            <a href="{{route('addcart',['id' => $product->id])}}">
                                <button class="text-blue-500 md:w-44 font-bold text-sm py-2 hover:bg-blue-500 border border-blue-500 mt-3 hover:text-white">
                                    <i class="fab fa-opencart"></i> THÊM VÀO GIỎ
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- mota san pham -->
            <div class="mt-10 px-3 md:px-16 lg:px-0">
                <h3 class="font-bold text-2xl">Mô tả sản phẩm</h3>
                <div class="py-10 ">
                    <p>
                        {{$product->description}}
                    </p>
                </div>
            </div>
            <!-- đánh giá -->
            <div class="mt-10 px-3 md:px-16 lg:px-0 hidden">
                <h3 class="font-bold text-2xl">Đánh giá sản phẩm</h3>
                <div class=" mt-3 shadow-lg  rounded-md border border-gray-400 grid grid-cols-12 py-10 px-10">
                    <div class="col-span-3 ">
                        <h3 class="font-bold text-md text-pink-700  "><span style="font-size: 30px;">4.8</span> trên 5</h3>
                        <div class="text-md">
                            <i class="fas fa-star text-yellow-500"></i>
                            <i class="fas fa-star text-yellow-500"></i>
                            <i class="fas fa-star text-yellow-500"></i>
                            <i class="fas fa-star text-yellow-500"></i>
                            <i class="fas fa-star text-yellow-500"></i>
                        </div>
                    </div>
                    <div class="col-span-9 grid grid-cols-6 gap-x-5 gap-y-2 ">
                        <div class="w-full border border-gray-300  text-sm text-center">
                            <a href="">
                                <h5 class="px-3 py-1">Tất cả</h5>
                            </a>
                        </div>
                        <div class="w-full border border-gray-300  text-sm text-center">
                            <a href="">
                                <h5 class="px-3 py-1">5 sao <span>(12)</span></h5>
                            </a>
                        </div>
                        <div class="w-full border border-gray-300  text-sm text-center">
                            <a href="">
                                <h5 class="px-3 py-1">4 sao <span>(12)</span></h5>
                            </a>
                        </div>
                        <div class="w-full border border-gray-300  text-sm text-center">
                            <a href="">
                                <h5 class="px-3 py-1">3 sao <span>(12)</span></h5>
                            </a>
                        </div>
                        <div class="w-full border border-gray-300  text-sm text-center">
                            <a href="">
                                <h5 class="px-3 py-1">2 sao <span>(12)</span></h5>
                            </a>
                        </div>
                        <div class="w-full border border-gray-300  text-sm text-center">
                            <a href="">
                                <h5 class="px-3 py-1">1 sao <span>(12)</span></h5>
                            </a>
                        </div>
                        <div class="w-full border border-gray-300  text-sm text-center">
                            <a href="">
                                <h5 class="px-3 py-1">Có Bình Luận <span>(12)</span></h5>
                            </a>
                        </div>
                        <div class="w-full border border-gray-300  text-sm text-center">
                            <a href="">
                                <h5 class="px-3 py-1">Có Hình Ảnh / Video<span>(12)</span></h5>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- comment sản phẩm -->
                <div>
                    <div class="grid grid-cols-12  py-5 border-b border-gray-300 mx-10">
                        <div class="col-span-1">
                            <img src="{{asset('storage/anhweb/anhcho.jpg')}}" class="w-12 h-12 rounded-full" alt="">
                        </div>
                        <div class="col-span-11">
                            <h4 class="text-sm">xuanha3577</h4>
                            <div class="text-xs mt-1">
                                <i class="fas fa-star text-yellow-500"></i>
                                <i class="fas fa-star text-yellow-500"></i>
                                <i class="fas fa-star text-yellow-500"></i>
                                <i class="fas fa-star text-yellow-500"></i>
                                <i class="fas fa-star text-yellow-500"></i>
                            </div>
                            <span class="text-xs mt-2 opacity-60
                        ">2022-06-27 19:12 | Phân loại hàng: XANH BÍCH,41</span>
                            <p class="mt-5 text-sm">Hàng mới nhận được rồi, chưa thử nhưng có cảm giác là ổn định. Đánh cầu không biết như thế nào. Nhưng cứ cho 4 sao cho đã👍</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-12  py-5 border-b border-gray-300 mx-10">
                        <div class="col-span-1">
                            <img src="{{asset('storage/anhweb/anhcho.jpg')}}" class="w-12 h-12 rounded-full" alt="">
                        </div>
                        <div class="col-span-11">
                            <h4 class="text-sm">xuanha3577</h4>
                            <div class="text-xs mt-1">
                                <i class="fas fa-star text-yellow-500"></i>
                                <i class="fas fa-star text-yellow-500"></i>
                                <i class="fas fa-star text-yellow-500"></i>
                                <i class="fas fa-star text-yellow-500"></i>
                                <i class="fas fa-star text-yellow-500"></i>
                            </div>
                            <span class="text-xs mt-2 opacity-60
                        ">2022-06-27 19:12 | Phân loại hàng: XANH BÍCH,41</span>
                            <p class="mt-5 text-sm">Hàng mới nhận được rồi, chưa thử nhưng có cảm giác là ổn định. Đánh cầu không biết như thế nào. Nhưng cứ cho 4 sao cho đã👍</p>
                            <div class="flex mt-5 gap-5">
                                <img onclick="image1(); myFunction()" class=" w-24 h-24 cursor-zoom-in" src="{{asset('storage/anhweb/anhcho1.jpg')}}" alt="">
                                <img onclick="image2(); myFunction()" class="w-24 h-24 cursor-zoom-in" src="{{asset('storage/anhweb/anhcho2.jpg')}}" alt="">
                                <img onclick="image3(); myFunction()" class="w-24 h-24 cursor-zoom-in" src="{{asset('storage/anhweb/anhcho3.jpg')}}" alt="">
                            </div>
                            <div class="mt-5 ">
                                <img class="w-6/12  h-72" id="image-comment" style="display: none;" src="{{asset('storage/anhweb/anhcho1.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 md:mt-3 lg:mt-10 px-3 md:px-16 lg:px-0 z-99">
                <h3 class="font-bold text-2xl">Sản phẩm tương tự</h3>
                <div class=" grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5 mt-10  w-full">
                    @foreach ($sptt as $item)
                    <div class="text-center rounded-lg hover:shadow-2xl py-3 duration-700">
                        <img src="{{asset('storage/'.$item->image)}}" alt="" class="mx-auto py-5 h-44" />
                        <div>
                            <a href="{{route('detail', ['id' => $item->id])}}">
                                <h4 class="font-bold px-3 nameProduct">{{$item->name}}</h4>
                            </a>
                            <div class="flex px-5 mt-10 pb-7">
                                <div>
                                    <h5 class="font-semibold text-sm">{{ number_format($item->price, 0) }} ¥</h5>
                                    <h5 class="text-xs text-left m-0 pt-1 opacity-70">
                                        Đã xem : <span>{{$item->product_views}}</span>
                                    </h5>
                                </div>
                                <div class="ml-auto">
                                    <i class="far fa-heart bg-gray-200 p-2 rounded-full hover:bg-gray-400 hover:text-white duration-700"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- nav mobile -->
            <div class="grid grid-cols-3  lg:hidden block border-t border-gray-400 py-2 sticky bottom-0 bg-white">
                <div class="mx-auto text-center text-gray-500">
                    <a href="">
                        <i class="fas fa-home text-sm"></i>
                        <h4 class="text-sm">Trang chủ</h4>
                    </a>
                </div>
                <div class="mx-auto text-center text-gray-500">
                    <i class="fas fa-heart"></i>
                    <h4 class="text-sm">Ưa thích</h4>
                    </a>
                </div>
                <div class="mx-auto text-center text-gray-500">
                    <a href="">
                        <i class="fas fa-user"></i>
                        <h4 class="text-sm">Cá nhân</h4>
                    </a>
                </div>
            </div>
        </div>
        <!--footer-->
        <div class="bg-gray-100 mt-20 lg:block hidden">
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
                        <img class="w-8" src="{{asset('storage/anhweb/facebook.png')}}" alt="" />
                        <img class="w-8" src="{{asset('storage/anhweb/ter.png')}}" alt="" />
                        <img class="w-8" src="{{asset('storage/anhweb/intagam.png')}}" alt="" />
                        <img class="w-8" src="{{asset('storage/anhweb/yout.png')}}" alt="" />
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
    </div>
    <script>
        // hover image detail
        var imagehover = document.querySelector('#slideLeft')
        var image2hover = document.querySelector('#slideRight')

        function bigimg(x) {
            imagehover.style.display = "block"
            imagehover.style.transition = "2s"
            imagehover.style.marginLeft = "0px"
            image2hover.style.display = "block"
            image2hover.style.transition = "2s"
            image2hover.style.marginRight = "0px"
        }

        function normalImg(x) {
            imagehover.style.display = "none"
            imagehover.style.transition = "2s"
            imagehover.style.marginLeft = "-100px"
            image2hover.style.display = "none"
            image2hover.style.transition = "2s"
            image2hover.style.marginRight = "-100px"
        }


        var loader = document.querySelector('.loader')
        var content = document.querySelector('.content')
        window.addEventListener('load', function() {
            loader.style.display = "none"
            content.style.display = "block"
        })
        //navimage
        let thumbnails = document.getElementsByClassName('thumbnail')

        let activeImages = document.getElementsByClassName('active')

        for (var i = 0; i < thumbnails.length; i++) {

            thumbnails[i].addEventListener('click', function() {
                console.log(activeImages)
                if (activeImages.length > 0) {
                    activeImages[0].classList.remove('active')
                }


                this.classList.add('active')
                document.getElementById('featured').src = this.src
            })
        }


        let buttonRight = document.getElementById('slideRight');
        let buttonLeft = document.getElementById('slideLeft');

        buttonLeft.addEventListener('click', function() {
            document.getElementById('slider').scrollLeft -= 180
        })

        buttonRight.addEventListener('click', function() {
            document.getElementById('slider').scrollLeft += 180
        })

        const cover = document.querySelector(".screen-image__cover");
        cover.addEventListener("mousemove", function(e) {
            const screenImage = document.querySelector(".screen-image");
            const image = document.querySelector(".screen-image__img");
            image.style = "width: auto;height:auto;max-height:unset";

            let imageWidth = image.offsetWidth;
            let imageHeight = image.offsetHeight;
            const screenWidth = screenImage.offsetWidth;
            const screenHeight = screenImage.offsetHeight;
            const spaceX = (imageWidth / 2 - screenWidth) * 2;
            const spaceY = (imageHeight / 2 - screenHeight) * 2;
            imageWidth = imageWidth + spaceX;
            imageHeight = imageHeight + spaceY;

            let x =
                e.pageX - screenImage.offsetParent?.offsetLeft - screenImage.offsetLeft;
            let y = e.pageY - screenImage.offsetParent?.offsetTop - screenImage.offsetTop;

            const positionX = (imageWidth / screenWidth / 2) * x;
            const positionY = (imageHeight / screenHeight / 2) * y;

            image.style = `left: ${-positionX}px;top: ${-positionY}px;width: auto;height:auto;max-height:unset;transform:none;`;
        });

        cover.addEventListener("mouseleave", function(e) {
            const image = document.querySelector(".screen-image__img");
            image.style = ``;
        });
        //click image detail
        function myFunction() {
            var image = document.getElementById('image-comment')
            if (true) {
                image.style.display = "block";
            } else {
                image.style.display = "none";
            }
        }


        function image1() {
            var a = document.getElementById("image-comment");
            a.setAttribute("src", "{{asset('storage/anhweb/anhcho1.jpg')}}");
        }

        function image2() {
            var a = document.getElementById("image-comment");
            a.setAttribute("src", "{{asset('storage/anhweb/anhcho2.jpg')}}");
        }

        function image3() {
            var a = document.getElementById("image-comment");
            a.setAttribute("src", "{{asset('storage/anhweb/anhcho3.jpg')}}");
        }
    </script>
</body>

</html>