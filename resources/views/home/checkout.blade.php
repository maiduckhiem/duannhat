@extends('home.layouts.main')
@section('header-title')
Checkout
@endsection
@section('content')
<div>
  <div>
    <div class="border-t border-gray-400 py-3">
      <div class="containers">
        <h1 class="text-2xl font-bold mt-5">
          Giỏ hàng <span class="font-medium text-sm">({{$quantity}} sản phẩm)</span>
        </h1>
        <div class="flex text-sm mt-5">
          <input type="checkbox" class="mt-1 w-10" name="" id="" />
          <h4 class="font-semibold border-r pr-2 border-gray-500">
            Chọn tất cả - <span>1</span> sản phẩm (số lượng <span>1</span>)
          </h4>
          <button class="pl-2 hover:text-red-500">Xóa tất cả</button>
        </div>
        <div class="grid grid-cols-12 mt-5 gap-10">
          <div class="col-span-8">
            <a href=""><button class="border-2 border-yellow-500 text-yellow-500 py-1 w-full hover:bg-yellow-500 hover:text-white">
                <i class="fas fa-plus pr-3"></i>Thêm sản phẩm
              </button></a>
            <!-- form giỏ hàng -->
            <div class=" grid grid-cols-1   mt-3   gap-5">
              @foreach ($cart as $sp)
              <div class="grid grid-cols-12 gap-5 border border-gray-400  py-3 px-3">
                <div class="col-span-2 mt-3">
                  <input type="checkbox" name="" id="">
                  <img class="w-48" src="{{asset('storage/'.$sp['image'])}}" alt="">
                </div>
                <div class="col-span-10 grid grid-cols-2 mt-5 gap-3 ">
                  <div class="">
                    <h3 class="font-bold text-md">{{$sp['name']}}</h3>
                    <h5 class="text-xs mt-3">Phí vận chuyển nội địa: <span class="font-bold">Đang cập nhật</span></h5>
                    <p class="text-xs">Ghi chú:</p>
                    <textarea class="border border-gray-500 mt-1" name="" id="" cols="30" rows="2"></textarea>
                  </div>
                  <div class="grid grid-cols-2">
                    <div class="flex h-8 ml-auto">
                      <button class="px-2 py-1 bg-gray-400 text-sm">-</button>
                      <input type="text" class="w-14 py-1 text-center border border-gray-300 text-sm" value="{{$sp['quantity']}}" />
                      <button class="px-2 py-1 bg-gray-400 text-sm">+</button>
                    </div>
                    <div class="ml-auto">
                      <h5><span class="font-bold">{{$sp['price']}} ¥</span></h5>
                      <button class="text-left text-sm hover:text-red-500">Xóa</button>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="col-span-4  bg-no-repeat bg-center bg-cover" style="background-image: url('./image/bg-modal-header.png')">

            <div class="border border-gray-400 py-10">
              <h4 class="px-5 font-bold  text-xl">Thanh toán</h4>
              <div class="flex text-sm px-5 mt-5 ">
                <p>Tổng tiền sản phẩm (<span>{{$quantity}}</span> sản phẩm)</p>
                <p class="text-right font-bold ml-auto">{{$total}} ¥</p>
              </div>
              <div class="flex text-sm px-5 mt-3">
                <p>Phí dịch vụ</p>
                <p class="text-right font-bold ml-auto">0 ¥</p>
              </div>
              <div class="flex text-sm px-5 mt-3">
                <p>Phí thanh toán</p>
                <p class="text-right font-bold ml-auto">0 ¥</p>
              </div>
              <div class="flex font-bold px-5 mt-5">
                <p class="">Tổng</p> <span class="ml-auto">{{$total}}</span> ¥
              </div>
              <div class="px-5 pt-5 ">
                <a href="{{route('information')}}"><button class="bg-amber-600 text-white w-full text-md py-1 hover:bg-amber-500">Tiến hành đặt hàng</button></a>
                <p class="text-xs mt-2 text-gray-400">*Quý khách nên thanh toán ngay tránh sản phẩm bị tăng giá do chênh lệch tỉ giá</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection