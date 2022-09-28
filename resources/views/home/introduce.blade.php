@extends('home.layouts.main')
@section('header-title')
Giới thiệu
@endsection
@section('content')
<div>
    <div>
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
        <div class="containers mt-10 relative pb-40 z-99">
            <h2 class="font-bold bg-gray-100 rounded-md pb-20 px-10 pt-5">
                Mua hàng NHẬT BẢN tại VIỆT NAM chưa bao giờ dễ dàng đến thế
            </h2>
            <div class="absolute top-20 left-10 grid grid-cols-4 gap-5" style="max-width: calc(100% - 355px)">
                <div class="gap-1 border border-gray-300 bg-white px-3 py-5 rounded-lg h-44">
                    <div class="flex">
                        <h4 class="font-bold text-sm">Hỗ trợ khách hàng 24/7</h4>
                        <img class="w-8 h-8" src="{{asset('storage/anhweb/icon1.png')}}" alt="" />
                    </div>
                    <p class="text-xs mt-3 text-gray-500">
                        Dịch vụ khách hàng tư vấn nhiệt tình, hỗ trợ Quý khách hàng 24/24h mọi lúc mọi nơi.
                    </p>
                </div>
                <div class="gap-1 border border-gray-300 bg-white px-3 py-5 rounded-lg h-44">
                    <div class="flex">
                        <h4 class="font-bold text-sm">Vận chuyển nhanh chóng</h4>
                        <img class="w-8 h-8" src="{{asset('storage/anhweb/icon2.png')}}" alt="" />
                    </div>
                    <p class="text-xs mt-3 text-gray-500">
                        Thời gian vận chuyển hàng hóa nhanh chóng, an toàn chỉ từ 3-5 ngày
                    </p>
                </div>
                <div class="gap-1 border border-gray-300 bg-white px-3 py-5 rounded-lg h-44">
                    <div class="flex">
                        <h4 class="font-bold text-sm">Bảo hiểm 100% hàng hóa</h4>
                        <img class="w-8 h-8" src="{{asset('storage/anhweb/icon3.png')}}" alt="" />
                    </div>
                    <p class="text-xs mt-3 text-gray-500">
                        Chính sách bảo hiểm hàng hóa tới 100%, nói KHÔNG với các trường hợp hàng hóa thất lạc, rơi vỡ, móp méo, tráo hàng, ..
                    </p>
                </div>
                <div class="gap-1 border border-gray-300 bg-white px-3 py-5 rounded-lg h-44">
                    <div class="flex">
                        <h4 class="font-bold text-sm">Săn SALE khủng dễ dàng</h4>
                        <img class="w-8 h-8" src="{{asset('storage/anhweb/icon4.png')}}" alt="" />
                    </div>
                    <p class="text-xs mt-3 text-gray-500">
                        Mua sắm hàng Nhật với quy trình trọn gói, thủ tục đơn giản, thanh toán dễ dàng!
                    </p>
                </div>
            </div>
            <div class="absolute top-16 right-0 w-96">
                <img src="{{asset('storage/anhweb/may bay (1) (1).png')}}" alt="" />
            </div>
        </div>
        <!-- introduce -->
        <div class="containers mt-5 border border-gray-300 px-5 pt-5 pb-20">
            <h3 class="font-bold text-xl border-b pb-5 border-gray-300">Tại sao nên chọn Ordernhat247?</h3>
            <div class="mt-10 ">
                <ul class="text-sm  px-10">
                    <li class="flex">
                        <i class="fas fa-circle text-xs mt-1 mr-3"></i>
                        <span class="text-gray-500">Hầu hết các trang web của Nhật, không giao hàng ra nước ngoài và chỉ chấp nhận thẻ thanh toán nội địa. Vì vậy, bạn sẽ rất khó để có thể mua trực tiếp từ những trang web này.</span>
                    </li>
                    <li class="flex mt-1">
                        <i class="fas fa-circle text-xs mt-1 mr-3"></i>
                        <span class="text-gray-500"> Và vấn đề quan trọng nhất, chúng tôi sẽ giúp bạn tối ưu chi phí vận chuyển từ khâu đóng gói đơn hàng. Hàng khi được gửi về đến kho của Janbox sẽ được miễn phí kiểm kê và đóng gói lại để giảm trọng lượng của gói hàng, từ đó khách hàng có thể tiết kiệm được chi phí vận chuyển. Đây là một trong những điểm vượt trội mà Ordernhat247 mang lại cho khách hàng của mình.</span>
                    </li>
                    <li class="flex mt-1">
                        <i class="fas fa-circle text-xs mt-1 mr-3"></i>
                        <span class="text-gray-500"> Chúng tôi sẽ giúp bạn giải quyết tất cả những khó khăn trên với dịch vụ mua hàng thông minh của Ordernhat247. Chỉ cần vài thao tác đơn giản là có thể mua được hàng chất lượng nội địa Nhật và Mỹ và đảm bảo vận chuyển nhanh chóng và an toàn về Việt Nam với giá rẻ nhất!</span>
                    </li>
                </ul>
                <h5 class="font-bold mt-5 bg-gray-100 py-3 px-10"><i class="fas fa-star text-white bg-orange-400 py-1 px-2 text-xs rounded-full mr-5"></i>Bạn có thể mua bất cứ sản phẩm gì từ hàng trăm website từ Nhật!</h5>
                <h5 class="font-bold mt-5 bg-gray-100 py-3 px-10"><i class="fas fa-star text-white bg-orange-400 py-1 px-2 text-xs rounded-full mr-5"></i>Bạn có thể mua được những sản phẩm hiếm, giới hạn với giá phải chăng!</h5>
                <h5 class="font-bold mt-5 bg-gray-100 py-3 px-10"><i class="fas fa-star text-white bg-orange-400 py-1 px-2 text-xs rounded-full mr-5"></i>Bạn có thể có thể thỏa sức mua sắp tại website!</h5>
            </div>
        </div>
        <div class="grid grid-cols-3 containers mt-10 gap-5">
            <div class="flex bg-blue-600 pl-3 py-5 rounded-lg">
                <div class="w-full bg-no-repeat" style="
              background-position: center right;
              background-image: url('{{asset('storage/anhweb/service-1.png')}}');
              background-position: center right -22px;
            ">
                    <h4 class="border-b border-white text-sm w-16 text-white">Dịch vụ</h4>
                    <h3 class="mt-3 font-bold text-md text-white">MUA HÀNG</h3>
                    <a href="">
                        <button class="bg-yellow-400 py-2 px-7 rounded-md mt-3 text-sm hover:text-white duration-1000">
                            Chi tiết
                        </button></a>
                </div>
            </div>
            <div class="flex bg-red-600 pl-3 py-5 rounded-lg">
                <div class="w-full bg-no-repeat pb-16" style="
              background-position: center right;
              background-image: url('{{asset('storage/anhweb/service-2.png')}}');
              background-position: center right -22px;
            ">
                    <h4 class="border-b border-white w-16 text-sm text-white">Dịch vụ</h4>
                    <h3 class="mt-3 font-bold text-md text-white">VẬN CHUYỂN</h3>
                    <a href=""><button class="hover:bg-yellow-400 py-2 px-7 bg-white rounded-md mt-3 text-sm duration-1000">
                            Chi tiết
                        </button></a>
                </div>
            </div>
            <div class="flex bg-lime-700 pl-3 py-5 rounded-lg">
                <div class="w-full bg-no-repeat" style="
              background-position: center right;
              background-image: url('{{asset('storage/anhweb/service-3.png')}}');
              background-position: center right -22px;
            ">
                    <h4 class="border-b border-white w-16 text-sm text-white">Dịch vụ</h4>
                    <h3 class="mt-3 font-bold text-md text-white">MUA HÀNG</h3>
                    <a href=""><button class="bg-black py-2 hover:bg-yellow-400 px-7 rounded-md mt-3 text-sm hover:text-black text-white duration-1000">
                            Chi tiết
                        </button></a>
                </div>
            </div>
        </div>
        <!-- list website -->
        <div class="containers hidden lg:block pt-10 pb-10 bg-center" style="background-image: url('{{asset('storage/anhweb/tab-vertical-background-2.png')}};">
            <div class="flex">
                <h3 class="font-bold text-xl">Danh sách website mua sắm</h3>
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
        <!--  -->
        <div class=" bg-no-repeat w-full bg-cover">
            <div class="">
                <div class="border-b mx-auto border-gray-400 text-center w-96">
                    <h3 class="text-black border-b-2 border-yellow-500 inline-block font-bold" style="padding: 0 40px 14px">
                        QUY TRÌNH MUA HÀNG
                    </h3>
                </div>
                <div class=" py-10
              +">
                    <img src="{{asset('storage/anhweb/quytrinhmuahang.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-2 containers py-10 gap-8">
        <div class="bg-slate-800 px-5 py-7 rounded-md bg-no-repeat " style="background-image: url('{{asset('storage/anhweb/mailchimp-bg.png')}}; background-position: top -22px right -35px;">
            <h4 class="border-b-2 border-orange-400 font-bold text-xl text-white w-60 pb-2 ">ĐĂNG KÝ KHUYẾN MÃI</h4>
            <div class="w-60">
                <p class="text-sm text-white mt-3 mb-3">Nhập vào địa chỉ email của bạn, để đăng ký nhận các thông tin khuyến mại</p>
                <div class="relative">
                    <input type="email" class="bg-none p-2 w-60 rounded-md pr-10" placeholder="Email" />
                    <button class="absolute p-2 rounded-full top-0 left-48 ml-2 "><i class=" fas fa-paper-plane "></i></button>
                </div>
            </div>
        </div>
        <div>
            <div class="flex border-b-2  border-orange-400">
                <h4 class=" font-bold text-xl  pb-2 ">TIN TỨC NỔI BẬT</h4>
                <div class="ml-auto ">
                    <button><i class="fas fa-angle-left text-xl"></i></button>
                    <button><i class="fas fa-angle-right text-xl"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
</div>
<!-- header -->
@endsection