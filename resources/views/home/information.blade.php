@extends('home.layouts.main')
@section('header-title')
Thông tin nhận hàng
@endsection
@section('content')
<div class="bg-gray-200 py-3 lg:block hidden">
    <div class="containers">
        <a href="">
            <div class="text-sm flex hover:text-amber-600">
                <i class="fas fa-home text-sm mr-3"></i>
                <a href="{{route('home')}}">
                    <h5 class="">Trang chủ</h5>
                </a>
            </div>
        </a>
    </div>
</div>

<!-- content -->
<div class="containers mx-auto">
    <div class="grid grid-cols-12 mt-10 gap-10">
        <form action="" method="post" class="col-span-6 border-l border-r border-b border-gray-300 pb-10 rounded-md shadow-lg">
            @csrf
            <h3 class="border-t-4 border-yellow-300 font-bold uppercase pt-5 px-5">1. Thông tin nhận hàng</h3>
            <div class="pt-10 px-5">
                <h4 class="text-xs">Họ tên *</h4>
                <input type="text" name="name" id="" class="w-full border border-gray-300 outline-none pl-3 py-1 rounded-md">
            </div>
            @error('name')
            <span class="focus-input100 px-5" style="font-size:12px; margin-top:-10px; color:red;">{{$message}}</span>
            @enderror
            <div class="mt-3  px-5">
                <h4 class="text-xs">Địa chỉ *</h4>
                <input type="text" name="address" id="" class="w-full border border-gray-300 outline-none pl-3 py-1 rounded-md">
            </div>
            @error('address')
            <span class="focus-input100 px-5" style="font-size:12px; margin-top:-10px; color:red;">{{$message}}</span>
            @enderror
            <div class="grid grid-cols-2 gap-5 px-5 mt-3">
                <select class="w-full border border-gray-300 outline-none pl-3 py-2 rounded-md text-xs">
                    <option value="">Tỉnh / Thành phố</option>
                </select>
                <select class="w-full border border-gray-300 outline-none pl-3 py-2 rounded-md text-xs">
                    <option value="">Quận / Huyện</option>
                </select>
                <select class="w-full border border-gray-300 outline-none pl-3 py-2 rounded-md text-xs">
                    <option value="">Thôn / Xã</option>
                </select>
            </div>
            <div class="mt-3  px-5">
                <h4 class="text-xs">Email *</h4>
                <input type="text" name="email" id="" class="w-full border border-gray-300 outline-none pl-3 py-1 rounded-md">
            </div>
            @error('email')
            <span class="focus-input100 px-5" style="font-size:12px; margin-top:-10px; color:red;">{{$message}}</span>
            @enderror
            <div class="mt-3  px-5">
                <h4 class="text-xs">Số điện thoại *</h4>
                <input id="mobile" type="text" name="phone_number" id="" class="w-full border border-gray-300 outline-none pl-3 py-1 rounded-md">
            </div>
            @error('phone_number')
            <span class="focus-input100 px-5" style="font-size:12px; margin-top:-10px; color:red;">{{$message}}</span>
            @enderror
            <div class="mt-3 px-5">
                <h4 class="text-xs">Quốc gia *</h4>
                <input type="text" name="nation" id="" class="w-full border border-gray-300 outline-none pl-3 py-1 rounded-md">
            </div>
            <div class="mt-3 px-5">
                <h4 class="text-xs">Mã zip *</h4>
                <input type="text" name="zip" id="" class="w-full border border-gray-300 outline-none pl-3 py-1 rounded-md">
            </div>
            <div class="text-center mt-10">
                <button class="bg-red-500 px-8 py-2 w-36 rounded-md text-white text-sm">Hủy</button>
                <a href="{{route('payment')}}"> <button type="submit" class="bg-blue-500 px-8 py-2 rounded-md text-white w-36 text-sm ">Xác nhận </button></a>
            </div>
        </form>
        <div class="col-span-6">
            <h4 class="font-bold uppercase mt-5">Thông tin đơn hàng</h4>
            <div class="grid grig-cols-1 overflow-y-scroll mt-3 pr-10" style="height: 600px;">
                @foreach ($cart as $item12)
                <div class="grid grid-cols-12 gap-5 border-t-2 mt-10 border-gray-300 py-3 px-3">
                    <div class="mt-3 col-span-3">
                        <img class="w-32" src="{{asset('storage/'.$item12['image'])}}" alt="" />
                    </div>
                    <div class="col-span-9 grid grid-cols-2 mt-3 gap-3">
                        <div>
                            <h3 class="font-bold text-sm">
                                {{$item12['name']}}
                            </h3>
                            <h5 class="text-sm mt-3">Số lượng: <span>{{$item12['quantity']}}</span></h5>
                            <h5 class="text-sm">
                                Phí vận chuyển nội địa:
                                <span class="font-bold text-sm">Đang cập nhật</span>
                            </h5>
                        </div>
                        <div class="ml-auto">
                            <h5><span class="font-bold text-sm">{{$item12['price']}} ¥</span></h5>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>


    <!--footer-->
</div>

<!-- header -->
@endsection