<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@vite('resources/css/app.css')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<body>
    <aside class="bg-gray-400 w-64 h-screen rounded-lg">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-200 ">
            <ul class="space-y-2 font-medium w-full ">
                <li class="w-full">
                    <p class="flex w-full items-center p-2  rounded-lg ">
                        <svg class="w-5 h-5 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Bảng điều khiển</span>

                    </p>
                </li>

                <li class="w-full hover:bg-gray-100">
                    <button type="button" id='button-dropdown'
                        class=" flex items-center h-full p-2 text-gray-900 rounded-lg    cursor-pointer">

                        <span class="flex-1 ms-3 ">Quan lý tuyến xe</span>

                    </button>
                </li>
                <li class="w-full hover:bg-gray-100">
                    <button type="button" id='button-dropdown'
                        class="relative flex items-center h-full p-2 text-gray-900 rounded-lg   cursor-pointer">

                        <span class="flex-1 ms-3 ">Quan lý nhân viên</span>

                    </button>
                </li>
                <li class="w-full hover:bg-gray-100">
                    <button type="button" id='button-dropdown'
                        class="relative flex items-center h-full p-2 text-gray-900 rounded-lg  cursor-pointer">

                        <span class="flex-1 ms-3 ">Quan lý xe</span>

                    </button>
                </li>
                <li class="w-full hover:bg-gray-100">
                    <button type="button" id='button-dropdown'
                        class="relative flex items-center h-full p-2 text-gray-900 rounded-lg  cursor-pointer">

                        <span class="flex-1 ms-3 ">Quan lý hàng hóa</span>

                    </button>
                </li>
                <li class="w-full hover:bg-gray-100">
                    <button type="button" id='button-dropdown'
                        class="relative flex items-center h-full p-2 text-gray-900 rounded-lg  cursor-pointer">

                        <span class="flex-1 ms-3 ">Đăng xuất</span>

                    </button>
                </li>
            </ul>
        </div>
    </aside>

</body>


</html>
