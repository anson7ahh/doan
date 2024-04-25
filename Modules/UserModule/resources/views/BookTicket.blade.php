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

    <section class="pt-[120px] ">

        <div class='bg-blue-300 rounded-md  '>
            <div class="flex flex-row gap-20 px-20">
                <div>
                    <div class="font-mono"> Tuyến : {{ $results->starting_poin }} - {{ $results->destination }}</div>
                    <div class="font-mono">Ngày giờ khởi hành : {{ $results->start_time }}</div>
                </div>
                <div>
                    <div class="font-mono">Giá vé : {{ $results->price }} VNĐ</div>
                    <div>xe {{ $results->vehicle_type }}</div>
                </div>
            </div>
        </div>

        <div class=" w-2/3 flex flex-col   justify-evenly pt-5 px-20">

            @if ($results->vehicle_type === 'Thường' || $results->vehicle_type === 'regular')
                <div class="flex flex-row  gap-20  justify-evenly pb-5">
                    <div>Tầng 1</div>
                    <div>Tầng 2</div>
                </div>
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <div class="flex flex-row gap-10">

                    <ul class=" grid grid-cols-3 grid-rows-7 grid-flow-col gap-4 w-1/2">
                        <li>
                            <p class="tiket" data-value="A1">A1</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="A2">A2</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="A3">A3</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="A4">A4</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="A5">A5</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="A6">A6</p>
                        </li>
                        <li>
                            <p class="bg-blue-300 rounded-lg w-20 text-center " data-value="A7">A7</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="B1">B1</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="B2">B2</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="B3">B3</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="B4">B4</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="B5">B5</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="B6">B6</p>
                        </li>
                        <li>
                            <p class="tiket " data-value="B7">B7</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="C1">C1</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="C2">C2</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="C3">C3</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="C4">C4</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="C5">C5</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="C6">C6</p>
                        </li>
                        <li>
                            <p class="bg-blue-300 rounded-lg w-20 hidden" data-value="C7">C7</p>
                        </li>
                    </ul>

                    <ul class=" grid grid-cols-3 grid-rows-7 grid-flow-col gap-4 w-1/2">
                        <li>
                            <p class="tiket" data-value="D1">D1</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="D2">D2</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="D3">D3</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="D4">D4</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="D5">D5</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="D6">D6</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="D7">D7</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="E1">E1</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="E2">E2</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="E3">E3</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="E4">E4</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="E5">E5</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="E6">E6</p>
                        </li>
                        <li>
                            <p class="tiket hidden" data-value="E7">E7</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="F1">F1</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="F2">F2</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="F3">F3</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="F4">F4</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="F5">F5</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="F6">F6</p>
                        </li>
                        <li>
                            <p class="tiket hidden" data-value="F7">F7</p>
                        </li>

                    </ul>
                </div>
            @else
                <div class="flex flex-row gap-20 justify-evenly pb-5">
                    <div>Tầng 1</div>
                    <div>Tầng 2</div>
                </div>
                <div class="flex flex-row">
                    <ul class=" grid grid-cols-2 grid-rows-7 grid-flow-col gap-4 w-1/2 justify-center">
                        <li>
                            <p class="tiket" data-value="A1">A1</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="A2">A2</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="A3">A3</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="A4">A4</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="A5">A5</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="A6">A6</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="A7">A7</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="B1">B1</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="B2">B2</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="B3">B3</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="B4">B4</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="B5">B5</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="B6">B6</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="B7">B7</p>
                        </li>
                    </ul>
                    <ul class=" grid grid-cols-2 grid-rows-7 grid-flow-col gap-4 w-1/2 justify-center">
                        <li>
                            <p class="tiket" data-value="D1">D1</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="D2">D2</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="D3">D3</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="D4">D4</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="D5">D5</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="D6">D6</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="D7">D7</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="E1">E1</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="E2">E2</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="E3">E3</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="E4">E4</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="E5">E5</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="E6">E6</p>
                        </li>
                        <li>
                            <p class="tiket" data-value="E7">E7</p>
                        </li>
                </div>
        </div>
        @endif
        <div class="pt-10 flex justify-center w-2/3 mr-5">
            <button id='btn' class=' bg-red-200 w-20 rounded-lg'>Đặt vé</button>
        </div>
    </section>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</body>

<script>
    $(document).ready(function() {
        var selectedValues = [];

        $("p").click(function() {

            var paragraphValue = $(this).data('value');

            var index = selectedValues.indexOf(paragraphValue);

            if (index === -1) {
                if (selectedValues.length < 4) {
                    selectedValues.push($(this).data('value'));

                    $(this).addClass('bg');

                } else {
                    alert('Bạn không thể đặt quá 4 vé');
                }
            } else {
                selectedValues.splice(index, 1);
                $(this).removeClass('bg');
            }
            console.log("Giá trị của p là: " + selectedValues);
        });



        // Sử dụng hàm để lấy giá trị của token từ cookie 'accessToken'
        $('#btn').click(function() {
            // Gửi dữ liệu đã chọn lên server bằng AJAX
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,


                },
                url: '{{ route('BookTicketdetails', ['id' => $results->id]) }}',
                data: {
                    selectedValues: selectedValues,
                },
                dataType: "json",
                success: function(response) {

                    // Xử lý phản hồi từ server (nếu cần)
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    // Xử lý lỗi (nếu có)



                    console.log(JSON.stringify(error));
                }
            });
        });



    });
</script>

</html>
