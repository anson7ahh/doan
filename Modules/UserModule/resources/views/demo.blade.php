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

<body class='lg'>

    <nav class=' h-[100px]  max-w-screen-2xl mx-auto inline-flex w-full border border-red-100 relative '>

        <div class=" basis-1/4 lg:basis-1/6 pl-5 pt-1 ">
            <img class=" object-cover outline-red-300 outline-double  h-[90px]    " src="{{ asset('image/logo.png') }}">
        </div>

        <div id='top-menu' class=" top-menu  hidden basis-2/4  z-50   ">
            <div class="  group relative   ">
                <button class= " inline-flex text-bold  text-black px-4 py-4 text-base border-none cursor-pointer">TRANG
                    CHỦ
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-3 h-3 mt-2 ml-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>

                <div class=" mt-5  w-full hidden absolute bg-gray-100 min-w-160 shadow-md z-10 group-hover:block">
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">1</a>
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

                <div class="mt-5  w-full hidden absolute bg-gray-100 min-w-160 shadow-md z-10 group-hover:block ">
                    <a
                        href="#"class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2</a>
                    <a href="/login" class="text-black block py-3 px-4 no-underline hover:bg-gray-100">Link
                        2</a>
                    <a href="#" class="text-black block py-3 px-4 no-underline hover:bg-gray-100">Link
                        3</a>

                </div>
            </div>
            <div class="  group  relative ">
                <button class="inline-flex text-black  px-4 py-4 text-base border-none cursor-pointer">DỊCH VỤ VẬN
                    TẢI HÀNG HÓA
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-3 h-3 mt-2 ml-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
                <div class="  mt-5 w-full hidden absolute bg-gray-100 min-w-160 shadow-md z-10 group-hover:block">
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 
            ">1</a>
                    <a href="/login" class="text-black block py-3 px-4 no-underline hover:bg-gray-100">Link 2</a>
                    <a href="#" class="text-black block py-3 px-4 no-underline hover:bg-gray-100">Link </a>
                </div>
            </div>

            <a class=" text-black px-4 py-4 text-base border-none cursor-pointer  hover:text-red-600"
                href='http://127.0.0.1:8000/'>Hóa đơn
            </a>
            <div class="flex flex-col lg:flex lg:flex-row">
                <a class=" text-black px-4 py-4 text-base border-none cursor-pointer  hover:text-red-600"
                    href='http://127.0.0.1:8000/register'>Đăng kí
                </a>
                <a class=" text-black px-4 py-4 text-base border-none cursor-pointer  hover:text-red-600"
                    href='http://127.0.0.1:8000/login'>Đăng nhập
                </a>
            </div>
        </div>
        <div class=" flex basis-1/4   justify-end    items-center lg:hidden ">
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
        <img class=" object-cover outline-red-300 w-full h-[500px]    flex-none " src="{{ asset('image/BgHome.jpg') }}">


    </div>
</body>

</html>
