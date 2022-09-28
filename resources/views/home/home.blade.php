@extends('home.layouts.main')
@section('header-title')
Trang chủ
@endsection
@section('content')
<div class="containers">
  <div class="grid grid-cols-1 lg:grid-cols-12 border-t border-gray-300 border-b">
    <div class="lg:col-span-2 hidden lg:block">
      <ul class="h-full" id="style-1">
        @foreach($category as $cate)
        <li class="py-2 px-3 hover:bg-gray-100">
          <a class="flex" href="{{route('cate', ['id' => $cate->id])}}"><i class="mt-1 mr-3 fab fa-airbnb"></i>{{$cate->name}}</a>
        </li>
        @endforeach
      </ul>
    </div>
    <div class="lg:col-span-10 hidden lg:block">
      <div class="your-class">
        @foreach($slideshow as $sl)
        <div> <img src="{{asset('storage/'.$sl->image)}}" class="w-full bg-cover bg-left" style="height: 400px" alt="" /></div>
        @endforeach
      </div>
    </div>
    <!-- banner mobile -->
    <div class="relative block lg:hidden">
      <div class="absolute flex w-full mt-5 px-5 md:px-16">
        <div class="flex">
          <i class="fas fa-bars text-white text-2xl"></i>
          <img class="h-10 ml-5" src="{{asset('storage/anhweb/logo 2c.png')}}" alt="" />
        </div>
        <div class="ml-auto">
          <i class="fab fa-opencart text-2xl text-white"></i>
        </div>
      </div>
      <div class="absolute w-full mt-16 px-5 md:px-16">
        <div class="relative">
          <input type="text" class="w-full p-1 mt-1 pr-20 py-2 px-2 rounded-md" placeholder="Nhập tên sản phẩm ..." />
          <i class="fas fa-search absolute top-4 right-4"></i>
        </div>
      </div>
      <img width="100%" src="{{asset('storage/anhweb/bannermobile.png')}}" alt="" />
    </div>
  </div>
</div>
<!-- end danh sach -->
<!-- list app mobile -->
<div class="containers border-t-4 border-gray-300 block lg:hidden px-5 md:px-16">
  <div>
    <h4 class="font-bold text-gray-500 pt-10">Từ Việt Nam:</h4>
    <div class="grid grid-cols-4 md:grid-cols-8 mt-5 gap-5">
      <div class="text-center">
        <a href="">
          <img class="mx-auto w-6/12 md:w-10/12" src="{{asset('storage/anhweb/amazon2.png')}}" alt="" />
          <span class="text-sm">Amazon</span>
        </a>
      </div>
      <div class="text-center">
        <a href="">
          <img class="mx-auto w-6/12 md:w-10/12" src="{{asset('storage/anhweb/shop.png')}}" alt="" />
          <span class="text-sm">Shoppe</span>
        </a>
      </div>
    </div>
  </div>
  <div>
    <h4 class="font-bold text-gray-500 pt-5">Từ japan:</h4>
    <div class="grid grid-cols-4 md:grid-cols-8 mt-5 gap-5">
      <div class="text-center">
        <a href="">
          <img class="mx-auto w-6/12 md:w-10/12" src="{{asset('storage/anhweb/amazon2.png')}}" alt="" />
          <span class="text-sm">Amazon</span>
        </a>
      </div>
      <div class="text-center">
        <a href="">
          <img class="mx-auto w-6/12 md:w-10/12" src="{{asset('storage/anhweb/shop.png')}}" alt="" />
          <span class="text-sm">Shoppe</span>
        </a>
      </div>
      <div class="text-center">
        <a href="">
          <img class="mx-auto w-6/12 md:w-10/12" src="{{asset('storage/anhweb/amazon2.png')}}" alt="" />
          <span class="text-sm">Amazon</span>
        </a>
      </div>
      <div class="text-center">
        <a href="">
          <img class="mx-auto w-6/12 md:w-10/12" src="{{asset('storage/anhweb/amazon2.png')}}" alt="" />
          <span class="text-sm">Amazon</span>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- banner sale -->
<div class="containers mt-3">
  <img src="{{asset('storage/anhweb/bannersale1.png')}}" alt="">
</div>
<!-- //flas sale -->
<div class="bg-cover bg-center rounded-md containers " style="background-image: url('{{asset('storage/anhweb/bg sale 2.png')}}')">
  <div class="containers px-5 md:px-0 pb-10 mt-5  lg:px-10  ">
    <div class="flex py-5 ">
      <img class="w-52 md:w-96" src="{{asset('storage/anhweb/bg sale.png')}}" alt="" />
      <span class="my-auto ml-auto text-white font-bold "><a href="#">Xem thêm <i class="fas fa-long-arrow-alt-right"></i></a></span>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-5   md:px-16 lg:px-10 ">
      @foreach($product_sales as $sp)
      <div class="text-center px-5 rounded-lg hover:shadow-2xl bg-white relative">
        <a href="{{route('detail', ['id' => $sp->id])}}">
          <!-- Phan tram sale -->

          <img src="{{asset('storage/'.$sp->image)}}" alt="" class="mx-auto py-5 h-44" />
        </a>
        <div>
          <div class=" mt-3 pb-7">
            <div class="mr-auto">
              <h5 class="font-semibold text-sm text-red-500">{{$sp->price}} VND</h5>
              <h5 class=" text-xs  m-0 pt-1 opacity-70">
                Đã xem <span>{{$sp->product_views}}</span>
              </h5>
            </div>
          </div>
        </div>
        <div class="absolute  " style="top: -35px; right:-20px;">
          <div class="relative">
            <img class="w-24" src="{{asset('storage/anhweb/sale 50.png')}}" alt="">
            <h3 class="absolute top-3 text-white right-4 text-sm font-bold">{{$sp->sales}}%</h3><!-- end phan tram sale -->
          </div>
        </div>
      </div>

      @endforeach

    </div>
  </div>
</div>
<!-- banner sale -->
<div class="containers mt-3">
  <img src="{{asset('storage/anhweb/bannersale.png')}}" alt="">
</div>
<div class="containers px-5 md:px-0  lg:px-0 mt-10">
  <div class="flex md:px-14 lg:px-0">
    <h4 class="font-bold text-xl">Sản phẩm mới</h4>
    <span class="mt-1 ml-10 text-amber-600 hover:text-black"><a href="#">Xem thêm <i class="fas fa-long-arrow-alt-right"></i></a></span>
  </div>
  <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-5 mt-8  md:px-16 lg:px-10">
    @foreach($products as $sp) <div class="text-center px-5 rounded-lg hover:shadow-2xl">
      <a href="{{route('detail', ['id' => $sp->id])}}"><img src="{{asset('storage/'.$sp->image)}}" alt="" class="mx-auto py-5 h-44" /></a>
      <div>
        <a href="{{route('detail', ['id' => $sp->id])}}" class="font-bold nameProduct">{{$sp->name}}</a>
        <div class="flex mt-10 pb-7">
          <div class="mr-auto">
            <h5 class="font-semibold text-sm">{{$sp->price}} VND</h5>
            <h5 class=" text-xs text-left m-0 pt-1 opacity-70">
              Đã xem <span>{{$sp->product_views}}</span>
            </h5>
          </div>
          <div>
            <i class="far fa-heart bg-gray-200 p-2 rounded-full hover:bg-gray-400 hover:text-white duration-700"></i>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="mt-10">
    <img src="{{asset('storage/anhweb/banner1.png')}}" alt="" />
  </div>
</div>
<div class="containers px-5 md:px-0 lg:px-0 mt-10">
  <div class="flex md:px-14 lg:px-0">
    <h4 class="font-bold text-xl">Sản phẩm nổi bật</h4>
    <span class="mt-1 ml-10 text-amber-600 hover:text-black"><a href="#">Xem thêm <i class="fas fa-long-arrow-alt-right"></i></a></span>
  </div>
  <div class="grid grid-cols-2  md:px-16 lg:px-10 md:grid-cols-4 lg:grid-cols-5 gap-5 mt-8">
    @if($productnb->count() <= 10) @foreach($productnb as $spnb) <div class=" px-5 rounded-lg hover:shadow-2xl">
      <a href="{{route('detail', ['id' => $spnb->id])}}"><img src="{{asset('storage/'.$spnb->image)}}" alt="" class="mx-auto py-5 h-44" /></a>
      <div>
        <a href="{{route('detail', ['id' => $spnb->id])}}" class="font-bold text-md nameProduct">{{$spnb->name}}</a>
        <div class="flex mt-10 pb-7">
          <div class="mr-auto">
            <h5 class="font-semibold text-sm">{{$spnb->price}} VND</h5>
            <h5 class=" text-xs text-left m-0 pt-1 opacity-70">
              Đã xem <span>{{$spnb->product_views}}</span>
            </h5>
          </div>
          <div>
            <i class="far fa-heart bg-gray-200 p-2 rounded-full hover:bg-gray-400 hover:text-white duration-700"></i>
          </div>
        </div>
      </div>
  </div>
  @endforeach
  @endif
</div>
<div class="mt-10">
  <img src="{{asset('storage/anhweb/banner2.png')}}" alt="" />
</div>
</div>
<!-- danh muc list -->
<div>
  <div class="containers px-5 md:px-0 lg:px-0 mt-10">
    <div class="flex md:px-14 lg:px-0">
      <h4 class="font-bold text-xl">My shop</h4>
      <span class="mt-1 ml-10 text-amber-600 hover:text-black"><a href="#">Xem thêm <i class="fas fa-long-arrow-alt-right"></i></a></span>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-5 mt-8  md:px-16 lg:px-10">
      @foreach($productdm1 as $spdm) <div class="text-center px-5 rounded-lg hover:shadow-2xl">
        <a href="{{route('detail', ['id' => $spdm->id])}}"><img src="{{asset('storage/'.$spdm->image)}}" alt="" class="mx-auto py-5 h-44" /></a>
        <div>
          <a href="{{route('detail', ['id' => $spdm->id])}}" class="font-bold text-md nameProduct">{{$spdm->name}}</a>
          <div class="flex mt-10 pb-7">
            <div class="mr-auto">
              <h5 class="font-semibold text-sm">{{$spdm->price}} VND</h5>
              <h5 class=" text-xs text-left m-0 pt-1 opacity-70">
                Đã xem <span>{{$spdm->product_views}}</span>
              </h5>
            </div>
            <div>
              <i class="far fa-heart bg-gray-200 p-2 rounded-full hover:bg-gray-400 hover:text-white duration-700"></i>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <div class="containers px-5 md:px-0 lg:px-0 mt-10">
    <div class="flex md:px-14 lg:px-0">
      <h4 class="font-bold text-xl">Amazon</h4>
      <span class="mt-1 ml-10 text-amber-600 hover:text-black"><a href="#">Xem thêm <i class="fas fa-long-arrow-alt-right"></i></a></span>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-5 mt-8  md:px-16 lg:px-10">
      @foreach($productdm2 as $spdm) <div class="text-center px-5 rounded-lg hover:shadow-2xl">
        <a href="{{route('detail', ['id' => $spdm->id])}}"><img src="{{asset('storage/'.$spdm->image)}}" alt="" class="mx-auto py-5 h-44" /></a>
        <div>
          <a href="{{route('detail', ['id' => $spdm->id])}}" class="font-bold text-md nameProduct">{{$spdm->name}}</a>
          <div class="flex mt-10 pb-7">
            <div class="mr-auto">
              <h5 class="font-semibold text-sm">{{$spdm->price}} VND</h5>
              <h5 class=" text-xs text-left m-0 pt-1 opacity-70">
                Đã xem <span>{{$spdm->product_views}}</span>
              </h5>
            </div>
            <div>
              <i class="far fa-heart bg-gray-200 p-2 rounded-full hover:bg-gray-400 hover:text-white duration-700"></i>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
<!-- danh mục -->
<div class="containers px-5  lg:px-0 mt-20">
  <div class=" md:px-14 lg:px-0">
    <div class="flex">
      <h4 class="mt-2 font-bold text-xl">Danh mục sản phẩm</h4>
      <h5 class="mt-3 ml-5 text-yellow-500 hover:text-black">
        <a href="">Xem tất cả <i class="fas fa-long-arrow-alt-right"></i></a>
      </h5>
    </div>
  </div>
  <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 md:px-16 lg:px-10 mt-10 text-center gap-5">
    @foreach($category as $cate)
    <div>
      <a href="#">
        <img class="mx-auto" src="{{asset('storage/'.$cate->image)}}" alt="" />
        <div>
          <h4>{{$cate->name}}</h4>
        </div>
      </a>
    </div>
    @endforeach

  </div>
  <div class="mt-10 ">
    <img src="{{asset('storage/anhweb/banner3.png')}}" alt="" />
  </div>
</div>
<!-- end danh mục -->
<!-- list website -->
<div class="containers hidden lg:block mt-10">
  <div class="flex">
    <h4 class="font-bold text-xl">Danh sách website mua sắm</h4>
    <span class="mt-1 ml-10 text-amber-600 hover:text-black"><a href="#">Xem thêm <i class="fas fa-long-arrow-alt-right"></i></a></span>
  </div>
  <p class="text-sm mt-2">
    Hơn 100 trang web mua sắm uy tín tại Nhật cho phép bạn thỏa sức chọn
    lựa.
  </p>

  <div class="grid grid-cols-5 gap-5 mt-8">
    <div class="px-3 py-3 rounded-xl hover:shadow-xl border border-gray-300">
      <a href="https://www.amazon.co.jp">
        <img src="{{asset('storage/anhweb/amazon.png')}}" alt="" class="mx-auto" /></a>
      <div>
        <h4 class="font-bold">Amazon</h4>
        <p class="text-sm text-gray-400 mt-3 pb-5">
          Sàn thương mại điện tử Amazon Nhật Bản
        </p>
      </div>
    </div>
    <div class="px-3 py-3 rounded-xl hover:shadow-xl border border-gray-300">
      <a href="https://shopping.yahoo.co.jp">
        <img src="{{asset('storage/anhweb/logo2.png')}}" alt="" class="mx-auto" /></a>
      <div>
        <h4 class="font-bold">Yahoo! Shopping</h4>
        <p class="text-sm text-gray-400 mt-3 pb-5">
          Sàn thương mại điện tử Yahoo! Nhật Bản
        </p>
      </div>
    </div>
    <div class="px-3 py-3 rounded-xl hover:shadow-xl border border-gray-300">
      <a href="https://www.ponparemall.com">
        <img src="{{asset('storage/anhweb/logo3.png')}}" alt="" class="mx-auto" /></a>
      <div>
        <h4 class="font-bold">Panpare Mall</h4>
        <p class="text-sm text-gray-400 mt-3 pb-5">
          Trung tâm mua sắm Online Ponpare Mall
        </p>
      </div>
    </div>
    <div class="px-3 py-3 rounded-xl hover:shadow-xl border border-gray-300">
      <a href="https://jp.mercari.com">
        <img src="{{asset('storage/anhweb/logo4.png')}}" alt="" class="mx-auto" /></a>
      <div>
        <h4 class="font-bold">Mercari</h4>
        <p class="text-sm text-gray-400 mt-3 pb-5">
          Chợ trời Online, bạn có thể trả giá cho sản phẩm muốn mua
        </p>
      </div>
    </div>
    <div class="px-3 py-3 rounded-xl hover:shadow-xl border border-gray-300">
      <a href="https://auctions.yahoo.co.jp">
        <img src="{{asset('storage/anhweb/logo5.png')}}" alt="" class="mx-auto" /></a>
      <div>
        <h4 class="font-bold">Yahoo! Auction</h4>
        <p class="text-sm text-gray-400 mt-3 pb-5">
          Trang đấu giá lớn nhất Nhật Bản Yahoo! Auction
        </p>
      </div>
    </div>
  </div>
</div>
<!-- menu mobile -->
<div class="grid grid-cols-3 containers  lg:hidden  border-t border-gray-400 py-2 sticky bottom-0 bg-white">
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
<!-- footer -->
@endsection