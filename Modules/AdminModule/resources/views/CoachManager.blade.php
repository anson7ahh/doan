@extends('adminmodule::layouts.master')
@section('content')
    <div>
        <table class="border border-gray-300">
            <tr class="flex gap-10 justify-start relative">
                <th class="CoachTableItems ">Biển số xe</th>
                <th class="CoachTableItems">Ngày bảo dưỡng</th>
                <th class="CoachTableItems">Dịch vụ</th>
                <th class="CoachTableItems">loại xe</th>
                <th class="CoachTableItems">Tổng vé</th>
                <th class="CoachTableItems  "></th>
                <th class="CoachTableItems"><button id='dropdown_addCoach'>Thêm xe</button></th>
            </tr>
            @foreach ($coaches as $coach)
                <tr class="flex flex-row gap-10 justify-start border border-gray-300 ">
                    <td class="CoachTableItems">{{ $coach->license_plate }}</td>
                    <td class="CoachTableItems">{{ $coach->coach_maintenance_date }}</td>
                    <td class="CoachTableItems">{{ $coach->service }}</td>
                    <td class="CoachTableItems">{{ $coach->vehicle_type }}</td>
                    <td class="CoachTableItems">{{ $coach->sum_ticket }}</td>


                    <td class='flex flex-row w-[200px] gap-5 justify-center pr-1'>
                        <a href=" {{ route('AdminCoachManager.destroy', ['id' => $coach->id]) }}">
                            <button class="bg-red-300" onclick=" return confirm('ban co chac chan muon xoa')">Xóa
                                xe</button></a>
                        <button class="bg-blue-300">Sửa thông tin xe</button>
                    </td>
                </tr>
            @endforeach
            <tr id='targetdropdown_addCoach' class="hidden absolute">
                <form class="flex flex-col  " action="{{ route('AdminCoachManager.strore') }}" method="POST">
                    <input class="text-center" placeholder="Biển số xe" name="license_plate" required>
                    <input class="text-center" placeholder="Ngày bảo dưỡng" name="coach_maintenance_date" required>
                    <input class="text-center" placeholder="Dịch vụ" list="service" name="service" required>
                    <datalist id="service">
                        <option class="text-center" value="Người">
                        <option class="text-center" value="Hàng hóa">
                    </datalist>
                    <input class="text-center" placeholder="Loại xe" list="vehicle_type" name="vehicle_type" required>
                    <datalist id="vehicle_type">
                        <option class="text-center" value="Vip">
                        <option class="text-center" value="Thường">
                    </datalist>
                    <input class="text-center" placeholder="Tổng vé xe" name="sum_ticket" required>
                    <button type="submit">Thêm xe</button>
                </form>
            </tr>
        </table>

    </div>

    <script>
        $(document).ready(function() {
            $('#dropdown_addCoach').click(function() {
                $('#targetdropdown_addCoach').toggle();
            });
        });
    </script>
@endsection
