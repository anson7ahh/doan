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
        @foreach ($results as $result)
            <div class='bg-blue-300 rounded-md  '>
                <div class="flex flex-row gap-20 px-20">

                    <div>
                        <div class="font-mono"> Tuyến : {{ $result->starting_poin }} - {{ $result->destination }}</div>
                        <div class="font-mono">Ngày giờ khởi hành : {{ $result->start_time }}</div>
                    </div>
                    <div>
                        <div class="font-mono">Giá vé : {{ $result->price }} VNĐ</div>
                        <div>xe {{ $result->vehicle_type }}</div>
                    </div>
                </div>
            </div>

            <div class=" w-2/3 flex flex-col   justify-evenly pt-5 px-20">

                @if ($result->vehicle_type === 'Thường' || $result->vehicle_type === 'regular')
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
        @if (Auth::check())
            <div class="pt-10 flex justify-center w-2/3 mr-5">
                <button id='btn' class=' bg-red-200 w-20 rounded-lg'>Đặt vé</button>
            </div>
        @else
            <div class="pt-10 flex justify-center w-2/3 mr-5">
                <button onclick="alert(`Bạn chưa đăng nhập`)" class=' bg-red-200 w-20 rounded-lg '>Đặt vé</button>
            </div>
        @endif
        @endforeach
    </section>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <section>
        <div class=" px-10">
            <div class="bg-blue-100">
                <p class="text-center font-bold ">Danh sách các chuyến xe</p>
            </div>
            <table class="w-full text-sm text-left  ">
                <thead class="text-xs text-gray-700 uppercase   ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Điểm đi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Điểm đến
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Thời gian khởi hành
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Giá
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Loại xe
                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if ($results->isEmpty())
                        <td>Không có kết quả tìm kiếm</td>
                    @else
                        @foreach ($results as $result)
                            <tr class="relative bg-gray-300 w-full">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    {{ $result->starting_poin }}
                                </th>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $result->destination }}
                                </td>

                                <td class="px-6 py-4 text-gray-900">
                                    {{ $result->start_time }}
                                </td>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $result->price }}
                                </td>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $result->vehicle_type }}
                                </td>
                                <td><button id='toggleCoachesDetail'
                                        class="px-2 py-2 text-gray-900 cursor-pointer bg-red-300 rounded-lg ">
                                        Chi tiết
                                    </button></td>

                            </tr>
                </tbody>
            </table>
            <div id='targetToggleCoachesDetail' class="absolute  bg-blue-200 w-11/12 hidden  rounded-lg ">
                @if ($result->vehicle_type === 'Thường' || $result->vehicle_type === 'regular')
                    <div class="flex flex-row  gap-20 pt-2 justify-evenly pb-5">
                        <div>Tầng 1</div>
                        <div>Tầng 2</div>
                    </div>

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
                                <p class="bg-blue-300 rounded-lg w-20 text-center " data-value="A7">A7
                                </p>
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
                    <div class="flex flex-row gap-20 pt-4 justify-evenly pb-5">

                        <div>Tầng 1</div>
                        <div>Tầng 2</div>
                    </div>
                    <div class="flex flex-row">
                        <ul class=" px-20 grid grid-cols-2 grid-rows-7 grid-flow-col gap-4 w-1/2 justify-center">
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
                @endif
                <div>
                    @if (Auth::check())
                        <div class="pt-10 flex justify-center w-5/6 pb-5 ">
                            <button id='btn' class=' bg-red-200 w-20 rounded-lg'>Đặt vé</button>

                        </div>
                    @else
                        <div class="pt-10 flex justify-center w-5/6  pb-5">
                            <button onclick="alert(`Bạn chưa đăng nhập`)" class=' bg-red-200 w-20 rounded-lg '>Đặt
                                vé</button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
        @endif

        </div>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </section>
</body>

<script>
    $(document).ready(function() {


        // $.ajax({
        //     url: {{ route('ShowTicket', ['id' => $result->id]) }} ", 
        //     method: "GET",
        //     dataType: "json",
        //     success: function(response) {
        //         var id = response.id;
        //         console.log("ID được lấy từ máy chủ:", id);

        //         // Bây giờ bạn có thể sử dụng ID trong JavaScript của bạn
        //         // Ví dụ:
        //         // window.location.href = "/ShowBookTicket?id=" + id;
        //     },
        //     error: function(xhr, status, error) {
        //         console.error("Đã xảy ra lỗi khi lấy ID từ máy chủ:", error);
        //     }
        // });




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
            if (selectedValues.length !== 0) {
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    url: '{{ route('BookTicketdetails', ['id' => $result->id]) }}',
                    data: {
                        selectedValues: selectedValues,
                    },
                    dataType: "json",
                    success: function(response) {
                        console.log(response);
                        alert('Bạn đã đặt vé thành công');
                    },
                    error: function(xhr, status, error) {
                        // Xử lý lỗi (nếu có)
                        console.log(JSON.stringify(error));
                    }

                });
            } else {
                alert('Bạn chưa chọn vé');
            }
        });
        $("#toggleCoachesDetail").click(function() {
            $("#targetToggleCoachesDetail").toggle();
        });

    })
</script>

</html>
