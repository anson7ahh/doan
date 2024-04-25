<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="image/logo.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <title>Tân Minh Hà</title>
</head>
@vite('resources/css/app.css')

<body>

    <section id='targetDropdownItem1' class='w-full flex flex-col  pt-20 px-10  '>
        <p class='font-bold font-mono text-3xl text-left my-10  '>Các tuyến đường phổ biến</p>

        <div id='slick-slider' class='  w-full h-full overflow-hidden  justify-start flex flex-row  relative z-10 '>


            <div class ='block w-1/3  '>
                <img class=" h-[200px] w-[330px] object-fill " src="{{ asset('image/vinh.jpg') }}">
                <div class='w-[300px]  '>
                    <p class="font-bold text-center">Nghệ An - Thanh Hóa (VIP)</p>
                    <p class='text-center'>Giá vé:200.000d</p>
                </div>
            </div>

            <div class ='block w-1/3 '>
                <img class=" h-[200px] w-[330px] object-fill " src="{{ asset('image/thanhhoa.png') }}">
                <div class='w-[300px] '>
                    <p class="font-bold text-center">Thanh Hóa - Hà Nội (VIP)</p>
                    <p class='text-center'>Giá vé:250.000d</p>
                </div>
            </div>
            <div class ='block w-1/3  '>
                <img class=" h-[200px] w-[330px] object-fill " src="{{ asset('image/hanoi.jpg') }}">
                <div class='w-[300px] '>
                    <p class="font-bold text-center">Nghệ An - Hà Nội (VIP)</p>
                    <p class='text-center'>Giá vé:450.000d</p>
                </div>
            </div>

            <div class ='block w-1/3  '>
                <img class=" h-[200px] w-[330px] object-fill " src="{{ asset('image/vinh1.jpeg') }}">
                <div class='w-[300px] '>
                    <p class="font-bold text-center">Nghệ An - Thanh Hóa </p>
                    <p class='text-center'>Giá vé:150.000d</p>
                </div>
            </div>
            <div class ='block w-1/3  '>
                <img class=" h-[200px] w-[330px] object-fill " src="{{ asset('image/thanhhoa1.jpeg') }}">
                <div class='w-[300px] '>
                    <p class="font-bold text-center">Thanh Hóa - Hà Nội </p>
                    <p class='text-center'>Giá vé:200.000d</p>
                </div>
            </div>
            <div class ='block basis-1/3   '>

                <img class=" h-[200px] w-[330px] object-fill " src="{{ asset('image/hanoi1.jpeg') }}">

                <div class='w-[300px] '>
                    <p class="font-bold text-center">Nghệ An - Hà Nội </p>
                    <p class='text-center'>Giá vé:350.000d</p>
                </div>
            </div>


        </div>
    </section>
    <!-- Tải jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <!-- Tải Slick JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        // Khởi tạo Slick slider sau khi tất cả các tài nguyên đã được tải
        $(document).ready(function() {
            $("#slick-slider").slick({
                slidesToShow: 3,
                infinite: true,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                arrows: true,

                nextArrow: `<button type='button' class='slick-next pull-right'><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" /></svg></button > `,
                prevArrow: `<button type='button' class='slick-prev pull-left'><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" /></svg></button > `,
            });
        });
    </script>

</body>

</html>
