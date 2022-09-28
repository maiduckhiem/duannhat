@extends('home.layouts.main')
@section('header-title')
Danh mục
@endsection
@section('content')
<div class="bg-gray-200 py-3">
  <div class="containers">
    <a href="">
      <div class="text-sm flex hover:text-amber-600">
        <i class="fas fa-home text-sm mr-3"></i>
        <a href="{{route('home')}}" class="">Trang chủ</a>
      </div>
    </a>
  </div>
</div>
<!-- content -->
<div class="containers mt-10 grid grid-cols-2">
  <div class="">
    <h4 class="font-bold">Danh mục</h4>
  </div>
  <div class="ml-auto">
    <select class="py-1 text-sm appearance-none px-10 border border-gray-400">
      <option value="volvo" selected>Gợi ý cho bạn</option>
      <i class="fas fa-angle-down"></i>
      <option value="saab">Saab</option>
      <option value="vw">VW</option>
      <option value="audi">Audi</option>
    </select>
  </div>
</div>
<div class="containers grid grid-cols-12 mt-3 gap-5">
  <div class="col-span-2">
    <ul class="border-b border-gray-300 pb-10">
      @foreach($cate as $item)
      <li class="hover:text-amber-600 mt-3 text-sm">
        <a href="{{route('category', ['id' => $item->id])}}">{{$item->name}}</a>
      </li>
      @endforeach
    </ul>
    <div class="border-b border-gray-300 pb-10">
      <h4 class="mt-8 font-bold">Lọc theo tính trạng</h4>
      <div class="mt-3">
        <form action="" method="POST">
          @csrf
          <div>
            <input type="radio" value="1" name="status" id="" />
            <label for="" class="text-sm ml-2">Hot</label>
          </div>
          <div>
            <input type="radio" value="0" name="status" id="" />
            <label for="" class="text-sm ml-2">Bình thường</label>
          </div>
      </div>
    </div>
    <div class="mt-5 text-center bg-amber-500 hover:bg-amber-700">
      <button type="submit" class="py-1 text-sm text-white">Lọc</button>
    </div>
    </form>
  </div>
  <div class="col-span-10 grid grid-cols-4 gap-5 mt-3">
    @foreach($products as $item3)
    <div class="text-center rounded-lg hover:shadow-2xl">
      <a href="{{route('detail', ['id' => $item3->id])}}"><img src="{{asset('storage/'.$item3->image)}}" alt="" class="mx-auto py-5 h-44" /></a>
      <div>
        <a href="{{route('detail', ['id' => $item3->id])}}" class="font-bold"><p class="px-3">{{$item3->name}}</p></a>
        <div class="grid grid-cols-2 px-5 mt-10 pb-2">
          <div>
            <h5 class="mr-auto text-gray-400 text-sm">{{ number_format($item3->price, 0) }} VND</h5>
          </div>
          <h5 class="ml-auto text-sm   opacity-70">
            Đã xem : <span>{{$item3->product_views}}</span>
          </h5>
        </div>
        <div class="py-3 ">
          <a href="{{route('addcart',['id' => $item3->id])}}">
          <i class="fas fa-cart-plus hover:text-white bg-gray-200 px-3 py-3 hover:bg-black rounded-full"></i>
          </a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
<!-- end header -->
@endsection