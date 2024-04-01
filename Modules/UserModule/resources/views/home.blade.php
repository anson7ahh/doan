<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="image/logo.png" type="image/gif" sizes="16x16">
    <title>Tân Minh Hà</title>
</head>
@vite('resources/css/app.css')
@vite('resources/js/home.js')

<body>

    <nav class=' h-[100px]  w-full lg:inline-flex border border-red-100  flex  relative  '>

        <div class=" w-1/4 lg:basis-1/6 pl-5 pt-1 ">
            <img class=" object-cover   h-[90px]  " src="{{ asset('image/logo.png') }}">
        </div>
        <div id='top-menu'
            class=" lg:w-5/6 lg:h-full  lg:flex lg:justify-start  lg:flex-row lg:items-center lg:top-0 lg:bg-white 
            top-menu-expanded ">
            <div class="  group relative   ">
                <button class= " inline-flex text-bold  text-black px-4 py-4 text-base border-none cursor-pointer">TRANG
                    CHỦ
                    <svg xmlns="http://www.w3.org/2000/svg" cover="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-3 h-3 mt-2 ml-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>

                <div class=" mt-5  w-full hidden absolute bg-gray-100 min-w-160 shadow-md z-10 group-hover:block">
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">1</a>
                    <a href="/login" class="text-black block py-3 px-4 no-underline hover:bg-gray-100">Link 2</a>
                    <a href="#" class="text-black block py-3 px-4 no-underline hover:bg-gray-100">Link 3</a>
                </div>
            </div>
            <div class=" group relative  ">
                <button class="inline-flex text-black  px-4 py-4 text-base border-none cursor-pointer">DỊCH VỤ VẬN
                    TẢI HÀNH KHÁCH
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-3 h-3 mt-2 ml-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>

                <div class="mt-5  w-full hidden absolute bg-gray-100  z-10 group-hover:block ">
                    <a href="#"class="block px-4 pt-4 hover:bg-gray-100 ">2</a>
                    <a href="/login" class="text-black block py-3 px-4 no-underline hover:bg-gray-100">Link
                        2</a>
                    <a href="#" class="text-black block py-3 px-4 no-underline hover:bg-gray-100">Link
                        3</a>

                </div>
            </div>
            <div class="h-[56px] px-4 py-4">
                <a class=" text-black  text-base border-none cursor-pointer  hover:text-red-600"
                    href='http://127.0.0.1:8000/'>DỊCH VỤ VẬN TẢI HÀNG HÓA
                </a>
            </div>
            <div class = 'h-[56px]  px-4 py-4'>
                <a class=" text-black text-base border-none cursor-pointer  hover:text-red-600"
                    href='http://127.0.0.1:8000/'>HÓA ĐƠN
                </a>
            </div>
            <div
                class=" flex flex-col justify-start items-center lg:flex lg:justify-start  lg:flex-row lg:items-center ">
                <a class="   text-black px-4 text-base border-none cursor-pointer  hover:text-red-600"
                    href='http://127.0.0.1:8000/register'>ĐĂNG KÍ
                </a>
                <a class=" text-black px-4  text-base border-none cursor-pointer pt-4 lg:pt-0 hover:text-red-600"
                    href='http://127.0.0.1:8000/login'>ĐĂNG NHẬP
                </a>
            </div>
        </div>
        <div class=" flex grow order-last  justify-end relative   items-center lg:hidden ">
            <svg id='top-menu-icon' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class=" h-6 w-6 cursor-pointer mr-[60px]">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>

        </div>
    </nav>
    <section class=''>


        <img class=" object-fill h-[500px] w-full " src="{{ asset('image/bgxetanminhha.png') }}">

    </section>

    <section class='w-full flex flex-col px-10 pt-10'>
        <p class='font-bold font-mono text-2xl text-left my-5  '>Các tuyến đường phổ biến</p>
        <div class='w-full h-full overflow-hidden overflow-x-scroll gap-20  flex flex-row  '>
            <div class ='mb-10 ml-5'>
                <img class=" h-[200px] w-[300px] object-cover " src="{{ asset('image/vinh.jpg') }}">
                <div class='w-[300px]  '>
                    <p class="font-bold text-center">Vinh - Thanh Hóa (VIP)</p>
                    <p class='text-center'>Giá vé:200.000d</p>
                </div>
            </div>

            <div class ='block w-1/3 mr-5'>
                <img class=" h-[200px] w-[300px] object-fill " src="{{ asset('image/thanhhoa.png') }}">
                <div class='w-[300px] '>
                    <p class="font-bold text-center">Thanh Hóa - Hà Nội (VIP)</p>
                    <p class='text-center'>Giá vé:250.000d</p>
                </div>
            </div>
            <div class ='block w-1/3 mr-5 '>
                <img class=" h-[200px] w-[300px] object-fill " src="{{ asset('image/hanoi.jpg') }}">
                <div class='w-[300px] '>
                    <p class="font-bold text-center">Vinh - Hà Nội (VIP)</p>
                    <p class='text-center'>Giá vé:450.000d</p>
                </div>
            </div>
            <div class ='block w-1/3 mr-5  '>
                <img class=" h-[200px] w-[300px] object-fill " src="{{ asset('image/vinh1.jpeg') }}">
                <div class='w-[300px] '>
                    <p class="font-bold text-center">Vinh - Thanh Hóa </p>
                    <p class='text-center'>Giá vé:200.000d</p>
                </div>
            </div>
            <div class ='block w-1/3 mr-5  '>
                <img class=" h-[200px] w-[300px] object-fill " src="{{ asset('image/thanhhoa1.jpeg') }}">
                <div class='w-[300px] '>
                    <p class="font-bold text-center">Thanh Hóa - Hà Nội </p>
                    <p class='text-center'>Giá vé:150.000d</p>
                </div>
            </div>
            <div class ='block basis-1/3 mr-5  '>

                <img class=" h-[200px] w-[300px] object-fill " src="{{ asset('image/hanoi1.jpeg') }}">

                <div class='w-[300px] '>
                    <p class="font-bold text-center">Vinh - Hà Nội </p>
                    <p class='text-center'>Giá vé:350.000d</p>
                </div>
            </div>
        </div>
    </section>

    <section class='h-[400px]  flex flex-col justify-center px-10 '>
        <div class=' flex items-center flex-col'>
            <p class='font-bold text-2xl '>Dịch vụ tiện nghi</p>
            <p class=''>Chúng tôi luôn mong muốn mang đến cho quý khách những dịch vụ và trải nghiệm tốt nhất</p>
        </div>
        <div class='pt-5 flex flex-row justify-center gap-5  '>
            <div class='w-1/4 flex flex-col  items-center  '>
                <img class=" object-cover h-[90px] w-1/2 " src="{{ asset('image/khieunai.jpg') }}">
                <p class='font-bold'>Phản hồi - Khiếu nại</p>
                <p class=' text-center '>Với mỗi khiếu nại, chúng tôi cam kết giải quyết nhanh chóng và hiệu quả</p>
            </div>
            <div class='w-1/4 flex flex-col items-center  '>
                <img class=" object-fill h-[90px] w-1/2 " src="{{ asset('image/hotline.png') }}">
                <p class='font-bold '>Đặt vé online</p>
                <p class=' text-center '>Quý khách có thể gọi điện trực tiếp đến hotline để đặt vé</p>
            </div>
            <div class='w-1/4 flex flex-col items-center  '>
                <img class=" object-fill h-[90px] w-1/2 " src="{{ asset('image/giaohang.png') }}">
                <p class='font-bold '>Giao hàng trong ngày</p>
                <p class=' text-center '>Giao hàng trong thời gian ngắn nhất, với chất lượng tốt nhất</p>
            </div>
            <div class='w-1/4 flex flex-col items-center  '>
                <img class=" object-fill h-[90px] w-1/2 " src="{{ asset('image/nha.png') }}">
                <p class='font-bold text-center'>Trung chuyển khách hàng </p>
                <p class=' text-center '>Đón và trả tại địa điểm mà quý khách yêu cầu</p>
            </div>
        </div>

    </section>


    <section class='h-[300px]  flex flex-col justify-center items-center px-10 '>
        <p class='pt-5 font-bold text-2xl'>Liên hệ đặt vé</p>
        <div class='flex flex-row w-full h-full gap-20 pt-10 justify-center  '>
            <div
                class='flex flex-col justify-center items-center w-1/3 bg-white   border-2 border-solid border-gray-200'>
                <img class=" object-cover h-1/2 w-1/2" src="{{ asset('image/hotlinedatve.jpg') }}">
                <p class='font-bold '>Đặt vé qua hotline</p>
                <p class='text-red-500 font-bold'>0963579789</p>
            </div>
            <div
                class='flex flex-col justify-center items-center w-1/3 bg-white  
                border-2 border-solid border-gray-200 '>
                <img class=" object-fill h-1/2 w-1/2" src="{{ asset('image/imagessdt.jpeg') }}">
                <p class='font-bold '>Đặt vé qua số điện thoại</p>
                <p class='text-red-500 font-bold'>0966966242</p>
            </div>
            <div
                class='flex flex-col justify-center items-center w-1/3 bg-white   border-2 border-solid border-gray-200'>
                <img class=" object-fill h-1/2 w-1/2" src="{{ asset('image/vanphong.png') }}">
                <p class='font-bold '>Đặt vé trực tiếp tại văn phòng</p>
                <p class='text-red-500 font-bold'>Mua vé tại phòng bán vé</p>
            </div>
        </div>
    </section>
    <section>
    </section>
</body>

</html>
