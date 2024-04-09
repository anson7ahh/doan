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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<body>
    <x-usermodule::navbar>
    </x-usermodule::navbar>
    <marquee class=" pt-[100px] mx-[100px] ">
        Sự an tâm của bạn là niềm vinh dự của chúng tôi - Tân Minh Hà, đối tác đáng tin cậy trên mọi hành trình
    </marquee>
    <section class="w-full  flex flex-row  ">

        <div class="flex flex-row h-full w-1/3 border-2 border-blue-500 ">
            <form class="flex flex-col w-full bg-white h-2/3" action="">
                <p class="text-center">Đặt vé trực tuyến</p>
                <input class="text-center" list="startingPoin" placeholder="Điểm đi">
                <datalist id="startingPoin">
                    <option class="text-center" value="Hà Nội">
                    <option class="text-center" value="Nghệ An">
                    <option class="text-center" value="Thanh Hóa">
                </datalist>
                <input class="text-center" list="destination" placeholder="Điểm đến">
                <datalist id="destination">
                    <option value="Hà Nội">
                    <option value="Nghệ An">
                    <option value="Thanh Hóa">
                </datalist>
                <input class=' flex justify-center ' type="date" name="date_input"
                    value="{{ \Carbon\Carbon::now()->toDateString() }}"
                    min="{{ \Carbon\Carbon::now()->toDateString() }}">
                <button type="submit"
                    class=" text-black font-bold 
                    py-2 px-4 rounded focus:outline-none focus:shadow-outline">Tìm
                    kiếm</button>
            </form>
        </div>

        <form class="w-2/3 ml-1 h-[460px]   " action="">
            <div class="w-full border border-black">
                <p class="text-center ">Danh sách các chuyến xe</p>
            </div>
        </form>
    </section>
</body>

</html>
