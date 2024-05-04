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

    <section class="pt-[120px] flex flex-row px-10">
        <div class="flex flex-row ">
            <div class="w-1/2  h-full ">
                <p class='text-center'><b>Nội quy khi gửi hàng</b></p>

                <p><B>Đóng gói đúng cách:</B> Yêu cầu đóng gói hàng hóa một cách an toàn và chắc chắn để đảm bảo không
                    gây
                    hỏng hóc
                    hoặc mất mát trong quá trình vận chuyển.</p>
                <p><b>Thông tin gửi hàng chính xác:</b> Đảm bảo cung cấp thông tin đầy đủ và chính xác về người gửi,
                    người
                    nhận và hàng hóa để tránh nhầm lẫn hoặc giao nhận sai.</p>
                <p><b>Trọng lượng và kích thước hợp lý:</b> Tuân thủ quy định về trọng lượng tối đa và kích thước của
                    gói
                    hàng để tránh phải trả thêm phí hoặc gặp khó khăn trong quá trình vận chuyển</p>
                <p><b>Thời gian bảo quản và xử lý hàng hóa:</b> Cung cấp hướng dẫn về cách bảo quản và xử lý hàng hóa
                    một
                    cách an toàn sau khi giao nhận.</p>
            </div>
            <div class="w-1/2 px-5 mx-5 border-collapse border-2  bg-blue-100  border-blue-500 rounded-lg">
                <p class="text-center">Hóa đơn gửi hàng</p>
                <form action="{{ route('FreightTransportationServices.store') }}" method="post" class="flex flex-col ">
                    @csrf
                    <input class="w-full" type="text" placeholder="Tên người gửi" name="sender_name" required>
                    <div class="w-full">

                        <input class="w-full" type="number" placeholder="Số điện thoại người gửi"
                            name='sender_phone_number' required>
                        @error('sender_phone_number')
                            <span class='text-sm text-red-600'>{{ $message }}</span>
                        @enderror
                    </div>
                    <input type="text"
                        placeholder="Địa chỉ người gửi (ghi địa chỉ cụ thể gồm số nhà , tên đường ...)"
                        name="sender_address" required>
                    <input type="text" placeholder="Trọng lượng(đơn vị kg)" name="weight" required>

                    <input type="text" placeholder="Tên người nhận" name="recipient_name" required>
                    <div class="w-full">
                        <input class="w-full" type="number" placeholder="Số điện thoại người nhận"
                            name="recipient_phone_number" required>
                        @error('recipient_phone_number')
                            <span class='text-sm text-red-600'>{{ $message }}</span>
                        @enderror
                    </div>
                    <input type="text"
                        placeholder="Địa chỉ người nhận (ghi địa chỉ cụ thể gồm số nhà , tên đường ...)"
                        name="recipient_address" required>
                    <input list="payer" placeholder="Người thanh toán" name="payer" required>
                    <datalist id="payer">
                        <option value="Người gửi">
                        <option value="Người nhận">

                    </datalist>

                    @if (Auth::check())
                        <div class="flex flex-col items-center justify-between">
                            <button type="submit" class=" text-black font-bold   bg-blue-100 py-3">Tạo
                                hóa đơn</button>
                        </div>
                    @else
                        <div class="flex flex-col items-center justify-between">
                            <button onclick="alert(`Bạn chưa đăng nhập`)" class=' bg-blue-100   py-3'>Tạo
                                hóa đơn</button>
                        </div>
                    @endif
                </form>

            </div>
        </div>
        <script>
            var msg = '{{ Session::get('alert') }}';
            var exist = '{{ Session::has('alert') }}';
            if (exist) {
                alert(msg);
            }
        </script>

    </section>

</body>


</html>
