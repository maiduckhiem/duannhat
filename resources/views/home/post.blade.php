@extends('home.layouts.main')
@section('header-title')
Tin tức
@endsection
@section('content')
<div class="bg-gray-200 py-3 lg:block hidden">
        <div class="containers">
            <a href="{{route('home')}}">
                <div class="text-sm flex hover:text-amber-600">
                    <i class="fas fa-home text-sm mr-3"></i>
                    <h5 class="">Trang chủ</h5>
                </div>
            </a>
        </div>
    </div>
<div class="containers mt-10">
    <div class="grid grid-cols-12 gap-10">
        <div class="col-span-9 grid grid-cols-3 gap-10">
            @foreach ($post as $new)
            <div class=" border border-gray-300 pb-5">
                <a href=""> <img class="w-full h-52" src="{{asset('storage/'.$new->image)}}" alt=""></a>
                <div class="px-3 mt-3">
                    <a href="">
                        <h3 class="text-md font-bold text-black mb-2">{{$new->tieu_de}}</h3>
                    </a>
                    <span class="text-xs opacity-75 "> 12:49 | 13/07/2018</span>
                    <p class="text-sm mt-2" style=" opacity: 0.95;">{{$new->content1}}</p>
                </div>
                <a href="{{route('post.detail', ['id' => $new->id])}}"> <button class="px-3  text-sm hover:text-red-500 mt-5">Xem thêm >></button></a>
            </div>
            @endforeach
        </div>
        <div class="col-span-3">
            <div>
                <h4 class=" rounded-md text-white px-5 py-2 font-bold" style="background: #001c40;">DANH MỤC TIN TỨC</h4>
                <ul class="px-2 py-2">
                    @foreach ($listpost as $listpost)
                    <li class="py-1 text-sm text-list">
                        <a href="{{route('listposts', ['id' => $listpost->id])}}"><i class="fas fa-angle-right mr-2"></i>{{$listpost->name}}</a>
                    </li>
                    @endforeach

                </ul>
            </div>
            <!-- list danh sách -->
            <div>
                <h4 class="rounded-md text-white px-5 py-2 font-bold" style="background: #001c40;">TIN TỨC MỚI</h4>
                @foreach ($news as $news)
                <div class="col-span-3 border border-gray-300 pb-5 grid grid-cols-2 my-5">
                    <div>
                        <a href=""><img src="{{asset('storage/'.$new->image)}}" alt=""></a>
                    </div>
                    <div class="px-3 mt-3">
                        <a href="">
                            <h3 class=" text-sm  mb-2">{{$news->content1}}</h3>
                        </a>
                        <span class="text-xs opacity-75 "> 12:49 | 13/07/2018</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection