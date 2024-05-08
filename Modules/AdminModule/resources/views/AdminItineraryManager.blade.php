@extends('adminmodule::layouts.master')
@section('content')
    <div class="bg-blue-100 mr-10 flex flex-row justify-start px-10 ">
        <div class="w-2/3 flex justify-center relative">
            <p class=" font-bold  ">Danh sách các chuyến xe</p>
        </div>
        <div class="w-1/3 flex justify-end">
            <button>Thêm mới</button>
        </div>
    </div>
    <table class="w-full text-sm text-left   ">
        <thead class="text-xs text-gray-700 uppercase  mr-10 ">
            <tr class="flex flex-row   mr-10 gap-10 ">
                <th scope="col" class=" ItenerarytableItems">
                    Điểm đi
                </th>
                <th scope="col" class="ItenerarytableItems">
                    Điểm đến
                </th>
                <th scope="col" class="w-[350px] ">
                    Thời gian đi - thời gian đến
                </th>
                <th scope="col" class="ItenerarytableItems ml-3">
                    Giá
                </th>
                <th scope="col" class="ItenerarytableItems">
                    Xe
                </th>
                <th scope="col" class="ItenerarytableItems">

                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ItineraryManagements as $ItineraryManagement)
                <tr class="flex flex-row border border-black mr-10">
                    <td class="ItenerarytableItems">
                        {{ $ItineraryManagement->starting_poin }}
                    </td>
                    <td class="ItenerarytableItems">
                        {{ $ItineraryManagement->destination }}
                    </td>
                    <td class="w-[350px]">
                        {{ $ItineraryManagement->start_time }} - {{ $ItineraryManagement->end_time }}
                    </td>

                    <td class="ItenerarytableItems ">
                        {{ $ItineraryManagement->price }} vnd
                    </td>
                    <td class="ItenerarytableItems">
                        {{ $ItineraryManagement->license_plate }}
                    </td>
                    <td class="ItenerarytableItems ">
                        <a href="{{ route('AdminItineraryManager.destroy', ['id' => $ItineraryManagement->id]) }}"><button
                                class="bg-red-200 px-2 rounded-lg"
                                onclick=" return confirm('ban co chac chan muon xoa')">Hủy chuyến</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div id='targetdropdown_addItineraryManagement' class=" absolute  w-1/3  ">
        <form class="flex flex-col  " action="{{ route('AdminItineraryManager.strore') }}" method="POST">
            @csrf

            <input class="text-center" placeholder="Điểm đi" name="starting_poin" list="starting_poin" required>
            <datalist id="starting_poin">
                <option class="text-center" value="Nghệ An">
                <option class="text-center" value="Thanh Hóa">
                <option class="text-center" value="Hà Nội">
            </datalist>
            <input class="text-center" placeholder="Điểm đến" name="destination" list="destination" required>
            <datalist id="starting_poin">
                <option class="text-center" value="Nghệ An">
                <option class="text-center" value="Thanh Hóa">
                <option class="text-center" value="Hà Nội">
            </datalist>

            <input class="text-center" placeholder="Ngày giờ khởi hành (năm-tháng-ngày giờ:phút)" name="start_time"
                required>
            <input class="text-center " placeholder="Ngày giờ đến bến (năm-tháng-ngày giờ:phút)" name="end_time" required>
            <input class="text-center " placeholder="giá (VND)" name="price" required>

            <input class="text-center" list="license_plate" placeholder="Biển số xe" name="license_plate" required>
            <datalist id="license_plate">
                @foreach ($coaches as $coach)
                    <option class="text-center" value="{{ $coach->license_plate }}">
                @endforeach
            </datalist>
            <div class="border border-black flex justify-center"> <button type="submit ">Thêm lộ trình</button>
            </div>
        </form>
    </div>
@endsection
