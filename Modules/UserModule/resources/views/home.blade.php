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

    <nav class=' h-[100px]  w-full lg:inline-flex    border border-red-100  flex  relative  '>

        <div class=" w-1/4 lg:basis-1/6 pl-5 pt-1 ">
            <img class=" object-cover outline-red-300 outline-double  h-[90px]  " src="{{ asset('image/logo.png') }}">
        </div>

        <div id='top-menu'
            class=" lg:w-5/6 lg:h-full  lg:flex lg:justify-start  lg:flex-row lg:items-center lg:top-0 lg:bg-white 
            top-menu-expanded ">
            <div class="  group relative   ">
                <button class= " inline-flex text-bold  text-black px-4 py-4 text-base border-none cursor-pointer">TRANG
                    CHỦ
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
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



    <div class="">
        <div class=" h-8  px-20 ">
            <marquee class=' cursor-default text-red-400 font-bold '>Nhà xe Tân Minh Hà kính chào quý khách ! Hãy để
                chúng tôi đồng hành cùng bạn trên mỗi hành trình, mang lại trải nghiệm vận chuyển an toàn và đáng tin
                cậy .

            </marquee>
        </div>
        <img class=" bg object-cover outline-red-300 w-full h-[450px]    flex-none "
            src="{{ asset('image/BgHome.jpg') }}">


    </div>
</body>

</html>
