   <!-- header -->
   <div class=" hidden lg:block sticky top-0 z-10" style="background: #001c40;">
     <div class="containers pt-4 ">
       <div class="grid grid-cols-12 gap-10">
         <div class="col-span-2 mx-auto">
           <a href="{{route('home')}}">
             <img class="h-10" src="{{asset('storage/anhweb/logo.png')}}" alt="" />
           </a>
         </div>
         <div class="col-span-7">
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
                 <a href="{{route('setting')}}" class="block p-1 text-gray-700">
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
               <div class="flex gap-3 py-2">
                 <img class="w-10 h-10" src="{{asset('storage/'.$item12['image'])}}" alt="">
                 <div>
                   <a href="">
                     <h5 class="font-bold text-xs hover:text-yellow-500">{{$item12['name']}}</h5>
                   </a>
                   <div class="grid grid-cols-2 gap-5  mt-2">
                     <div class="text-xs ">
                       <h5 class="font-bold">{{$item12['price']}} ¥</h5>
                     </div>
                     <div class="text-xs  ">
                       <p class="text-gray-400">Số lượng : <span>{{$item12['quantity']}}</span></p>
                       <p><a href="{{route('deletecart',['id'=>$item12['id']])}}"><button class="ml-12"> <i class="fas fa-trash-alt text-red-500 "></i></button></a></p>
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
             <i class="fab fa-battle-net text-xl  mr-2" style="color: #001c40;"></i>
             <h4 class="font-bold">Market</h4>
           </a>
         </div>
         <div>
           <a class="flex" href="#">
             <i class="fas fa-truck  text-xl mr-2" style="color: #001c40;"></i>
             <h4 class="font-bold">Express</h4>
           </a>
         </div>
         <div>
           <a class="flex" href="#">
             <i class="fas fa-fire-alt  text-xl mr-2" style="color: #001c40;"></i>
             <h4 class="font-bold">Ưu đãi</h4>
           </a>
         </div>
         <div>
           <a class="flex" href="{{route('introduce')}}">
             <i class="fas fa-leaf  text-xl mr-2" style="color: #001c40;"></i>
             <h4 class="font-bold">Giới thiệu</h4>
           </a>
         </div>
         <div>
           <a href="{{route('post')}}" class="flex">
             <i class="fab fa-accusoft text-xl  mr-2" style="color: #001c40;"></i>
             <h4 class="font-bold ">Bài viết</h4>
           </a>
         </div>
       </div>
       <div class="col-span-2 flex">
         <i class="fas fa-home text-xl  mr-2" style="color: #001c40;"></i>
         <h4 class="font-bold ">Bán ở nhật bản</h4>
       </div>

     </div>
   </div>