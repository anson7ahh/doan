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

<body>
    <x-usermodule::navbar>
    </x-usermodule::navbar>
    <section class="pt-[120px]">
        @if (Auth::check())
            <div>
                <div>Danh sách hóa đơn đã đặt</div>
                @foreach ($results as $result)
                    <div class="flex flex-col bg-gray-100 rounded-lg mt-10 px-10 pb-10 ">
                        <div class='mt-6 font underline'>Hóa đơn đặt vé</div>
                        <div class="flex flex-row gap-3  ">
                            <p> <span class=" font-bold">Biển số xe:</span>{{ $result->license_plate }}</p>
                            <p><span class=" font-bold">Vị trí ghế:</span>{{ $result->seat_position }}</p>

                            <p><span class=" font-bold">Giá:</span>{{ $result->price }}</p>
                            <p><span class=" font-bold">Lộ trình:</span>{{ $result->starting_poin }}-
                                {{ $result->destination }}</p>
                            <p><span class=" font-bold">Thời
                                    gian:</span>{{ $result->start_time }} - {{ $result->end_time }}</p>

                            <a class="text-red-500 font-bold pl-10"
                                onclick=" return confirm('ban co chac chan muon xoa')"
                                href=" {{ route('invoices.destroy', ['id' => $result->id]) }}">Hủy vé</a>
                        </div>

                    </div>
                @endforeach
            </div>
        @else
            <div>
                <P>{{ $message }}</P>
            </div>
        @endif
    </section>


    <script></script>
</body>

</html>
