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
    <section class="w-full  flex flex-row px-10 ">

        <div class="flex flex-row h-full w-1/3 border-2 border-blue-500 rounded-lg">
            <form class="flex flex-col w-full bg-white h-2/3" action={{ route('SearchItinerary') }} method="GET">
                <p class="text-center">Đặt vé trực tuyến</p>
                <input class="text-center" list="startingPoin" placeholder="Điểm đi" name="startingPoin" required>
                <datalist id="startingPoin">
                    <option class="text-center" value="Hà Nội">
                    <option class="text-center" value="Nghệ An">
                    <option class="text-center" value="Thanh Hóa">
                </datalist>
                <input class="text-center" list="destination" placeholder="Điểm đến" name="destination" required>
                <datalist id="destination">
                    <option class="text-center" value="Hà Nội">
                    <option class="text-center" value="Nghệ An">
                    <option class="text-center" value="Thanh Hóa">
                </datalist>
                <input class=' flex justify-center items-end ' type="date" name="date" required
                    value="{{ \Carbon\Carbon::now()->toDateString() }}"
                    min="{{ \Carbon\Carbon::now()->toDateString() }}">





                <button type="submit"
                    class=" text-black font-bold 
                    py-2 px-4 rounded focus:outline-none focus:shadow-outline">Tìm
                    kiếm</button>
            </form>
        </div>

        <div class="  pl-10">
            <div class="bg-blue-100">
                <p class="text-center font-bold ">Danh sách các chuyến xe</p>
            </div>
            <table class="w-full text-sm text-left ">
                <thead class="text-xs text-gray-700 uppercase  dark:bg-gray-700 dark:text-gray-400">
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
                        <tr>
                            @foreach ($results as $result)
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                                <td class="px-6 py-4 text-gray-900 cursor-pointer hover:blue-100">
                                    <a href="{{ route('ShowBookTicketdetails', ['id' => $result->id]) }}">
                                        Chi tiết</a>
                                </td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>

    </section>
</body>

</html>
