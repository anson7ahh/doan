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

    <section class='lg:pt-[100px] pt-0 z-50 '>
        <img class=" object-fill h-[500px] w-full " src="{{ asset('image/bgxetanminhha.png') }}">
    </section>

    <section id='targetDropdownItem1' class='w-full flex flex-col  pt-20 px-10 '>
        <p class='font-bold font-mono text-3xl text-left my-10  '>Các tuyến đường phổ biến</p>

        <div
            class='pl-5 w-full h-full overflow-hidden overflow-x-scroll justify-start gap-20 flex flex-row  relative  '>


            <div class ='mb-11 '>
                <img class=" h-[200px] w-[300px] object-cover " src="{{ asset('image/vinh.jpg') }}">
                <div class='w-[300px]  '>
                    <p class="font-bold text-center">Vinh - Thanh Hóa (VIP)</p>
                    <p class='text-center'>Giá vé:200.000d</p>
                </div>
            </div>

            <div class ='block w-1/ mr-5'>
                <img class=" h-[200px] w-[300px] object-fill " src="{{ asset('image/thanhhoa.png') }}">
                <div class='w-[300px] '>
                    <p class="font-bold text-center">Thanh Hóa - Hà Nội (VIP)</p>
                    <p class='text-center'>Giá vé:250.000d</p>
                </div>
            </div>
            <div class ='block w-1/3  '>
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

    <section id="targetDropdownItem2" class='h-[400px]  flex flex-col justify-center px-10 pb-10  '>
        <div class=' flex items-center flex-col mt-[120px]'>
            <p class='font-bold text-2xl '>Dịch vụ tiện nghi</p>
            <p class=''>Chúng tôi luôn mong muốn mang đến cho quý khách những dịch vụ và trải nghiệm tốt nhất</p>
        </div>
        <div class='pt-10 flex flex-row justify-center gap-5  '>
            <div class='w-1/4 flex flex-col  items-center  '>
                <img class=" object-cover h-[90px] w-1/2 " src="{{ asset('image/khieunai.jpg') }}">
                <p class='font-bold pt-3'>Phản hồi - Khiếu nại</p>
                <p class=' text-center '>Với mỗi khiếu nại, chúng tôi cam kết giải quyết nhanh chóng và hiệu quả</p>
            </div>
            <div class='w-1/4 flex flex-col items-center  '>
                <img class=" object-fill h-[90px] w-1/2 " src="{{ asset('image/hotline.png') }}">
                <p class='font-bold pt-3'>Đặt vé online</p>
                <p class=' text-center '>Quý khách có thể gọi điện trực tiếp đến hotline để đặt vé</p>
            </div>
            <div class='w-1/4 flex flex-col items-center  '>
                <img class=" object-fill h-[90px] w-1/2 " src="{{ asset('image/giaohang.png') }}">
                <p class='font-bold pt-3'>Giao hàng trong ngày</p>
                <p class=' text-center '>Giao hàng trong thời gian ngắn nhất, với chất lượng tốt nhất</p>
            </div>
            <div class='w-1/4 flex flex-col items-center  '>
                <img class=" object-fill h-[90px] w-1/2 " src="{{ asset('image/nha.png') }}">
                <p class='font-bold pt-3'>Trung chuyển khách hàng </p>
                <p class=' text-center '>Đón và trả tại địa điểm mà quý khách yêu cầu</p>
            </div>
        </div>

    </section>


    <section id='targetDropdownItem3' class='h-[400px] px-10  flex flex-col justify-center items-center  '>
        <p class=' font-bold text-2xl mt-[150px]'>Liên hệ đặt vé</p>
        <div class='flex flex-row w-full h-4/5 gap-20 pt-10 justify-center  '>
            <div
                class='flex flex-col justify-center items-center w-1/3 bg-white  
            shadow-lg shadow-gray-950'>
                <img class=" object-fill h-1/2 w-2/3" src="{{ asset('image/hotlinedatve.jpg') }}">
                <p class='font-bold pt-3 '>Đặt vé qua hotline</p>
                <p class='text-red-500 font-bold '>0963579789</p>
            </div>
            <div
                class='flex flex-col justify-center items-center w-1/3 bg-white  
                 shadow-lg shadow-gray-950 '>
                <img class=" object-fill h-1/2 w-1/2" src="{{ asset('image/imagessdt.jpeg') }}">
                <p class='font-bold pt-3 '>Đặt vé qua số điện thoại</p>
                <p class='text-red-500 font-bold '>0966966242</p>
            </div>
            <div
                class='flex flex-col justify-center items-center w-1/3 bg-white   
                shadow-lg shadow-gray-950'>
                <img class=" object-fill h-1/2 w-1/2" src="{{ asset('image/vanphong.png') }}">
                <p class='font-bold pt-3'>Đặt vé trực tiếp tại văn phòng</p>
                <p class='text-red-500 font-bold'>Mua vé tại phòng bán vé</p>
            </div>
        </div>
    </section>


    <section id="targetDropdownItem4" class="h-[400px] flex flex-col   px-10 ">
        <div class="pt-[150px] flex flex-col justify-center items-center  ">
            <p class="  text-2xl ">CAM KẾT CHẤT LƯỢNG VỚI</p>
            <p class="  text-2xl ">BỘ TIÊU CHUẨN NHÀ XE CỦA TÂN MINH HÀ</p>
        </div>
        <div class="flex flex-rows justify-center">
            <div class="w-1/3 flex flex-col items-center pt-5">
                <img class=" object-fill h-[90px] w-[90px]  " src="{{ asset('image/dautich.png') }}">
                <p class="pt-5 font-bold">Dịch vụ uy tín</p>
                <p class="text-center">Xuất bến đúng giờ, cam kết KHÔNG bắt khách dọc đường</p>
            </div>
            <div class="w-1/3 flex flex-col items-center pt-5">
                <img class=" object-fill h-[90px] w-[90px]  " src="{{ asset('image/dautich.png') }}">
                <p class="pt-5 font-bold">Giữ chỗ 100%</p>
                <p class="text-center">Mọi hành khách đặt vé sẽ được giữ chỗ 100%, KHÔNG để khách nằm luồng.</p>
            </div>
            <div class="w-1/3 flex flex-col items-center pt-5">
                <img class=" object-fill h-[90px] w-[90px]  " src="{{ asset('image/dautich.png') }}">
                <p class="pt-5 font-bold">Giá vé ổn định</p>
                <p class="text-center">Cam kết bán đúng giá niêm yết, KHÔNG tăng giá dịp lễ Tết.</p>
            </div>
        </div>
    </section>
    <footer class='w-full h-full flex flex-col pl-20 mt-[150px]  border  bg-gray-100 pb-10'>
        <img class="  object-fill  w-[140px]  h-[90px] my-10  " src="{{ asset('image/logo.png') }}">
        <div class='flex flex-row '>
            <div class="w-1/3">
                <p class='font-bold'>Nhà xe Tân Minh Hà</p>
                <p>Địa chỉ : Xóm Khánh Hậu xã Hưng Hòa thành phố Vinh tỉnh Nghệ An</p>
                <p>Hotline:0963579789</p>
                <a href="https://www.facebook.com/xe.tanminhha/">FB:https://www.facebook.com/xe.tanminhha/</a>
            </div>
            <div class="w-1/3">
                <p class="font-bold">Khách hàng</p>
                <p>Đặt vé online</p>
                <p>Kiểm tra vé</p>

                <p>Chính sách hủy vé/đổi trả</p>
                <p>chính sách bảo mật thông tin</p>
            </div>
        </div>
    </footer>



</body>
<script>
    //dropdown id


    $("#dropdownItem1").click(function() {
        $('html, body').animate({
            scrollTop: $("#targetDropdownItem1").offset().top
        }, 2000);
    });

    $("#dropdownItem2").click(function() {
        $('html, body').animate({
            scrollTop: $("#targetDropdownItem2").offset().top
        }, 1000);
    });

    $("#dropdownItem3").click(function() {
        $('html, body').animate({
            scrollTop: $("#targetDropdownItem3").offset().top
        }, 1000);
    });
    $("#dropdownItem4").click(function() {
        $('html, body').animate({
            scrollTop: $("#targetDropdownItem4").offset().top
        }, 1000);
    });


    //scroll left



    $(document).ready(function() {
        $("#iconSection1").click(function() {
            $("#targetDropdownItem1").animate({
                scrollLeft: 0
            }, "slow");
        });
    });
</script>

</html>
