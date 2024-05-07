<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="image/logo.png" type="image/gif" sizes="16x16">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Tân Minh Hà</title>
</head>
@vite('resources/css/app.css')

<body>
    <x-usermodule::navbar>
    </x-usermodule::navbar>
    <section class="pt-[120px]">
        @if (Auth::check())
            <div>

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

    </section>
    <section>
        <div>

            @foreach ($datas as $data)
                <div class="flex flex-col bg-gray-100 rounded-lg mt-10 px-10 pb-10 ">
                    <div class=" underline pt-5">Danh sách hóa đơn giao hàng đã đặt</div>
                    <div class="flex flex-row gap-20">
                        <div class="flex flex-row  justify-between gap-20">
                            <div class="flex flex-col gap-3  ">
                                <p> <span class=" font-bold">Tên người nhận:</span>{{ $data->recipient_name }}</p>
                                <p><span class=" font-bold">Số điện thoại người
                                        nhận:</span>{{ $data->recipient_phone_number }}
                                </p>
                                <p><span class=" font-bold">Địa chỉ người nhận:</span>{{ $data->recipient_address }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-3">

                                <p><span class="font-bold">
                                        người gửi:</span>{{ $data->sender_name }}</p>
                                <p><span class=" font-bold">Số điện thoại người gửi :</span>
                                    {{ $data->sender_phone_number }}</p>
                                <p><span class=" font-bold">Địa chỉ người gửi:</span>{{ $data->sender_address }} </p>
                            </div>

                        </div>
                        <div class="flex justify-center">
                            <a class="text-red-500 font-bold pl-10 flex items-center"
                                onclick=" return confirm('ban co chac chan muon xoa')"
                                href=" {{ route('invoices.destroy', ['id' => $data->id]) }}">Hủy hóa đơn</a>
                        </div>
                    </div>
                </div>
            @endforeach
    </section>
@else
    <div>
        <P>{{ $message }}</P>
    </div>
    @endif

</body>

</html>
