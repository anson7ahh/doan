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

    <section class="pt-[100px] flex flex-row">
        <div class="w-1/2 px-10 h-full ">
            <p class='text-center'><b>Nội quy khi gửi hàng</b></p>

            <p><B>Đóng gói đúng cách:</B> Yêu cầu đóng gói hàng hóa một cách an toàn và chắc chắn để đảm bảo không gây
                hỏng hóc
                hoặc mất mát trong quá trình vận chuyển.</p>
            <p><b>Thông tin gửi hàng chính xác:</b> Đảm bảo cung cấp thông tin đầy đủ và chính xác về người gửi, người
                nhận và hàng hóa để tránh nhầm lẫn hoặc giao nhận sai.</p>
            <p><b>Trọng lượng và kích thước hợp lý:</b> Tuân thủ quy định về trọng lượng tối đa và kích thước của gói
                hàng để tránh phải trả thêm phí hoặc gặp khó khăn trong quá trình vận chuyển</p>
            <p><b>Thời gian bảo quản và xử lý hàng hóa:</b> Cung cấp hướng dẫn về cách bảo quản và xử lý hàng hóa một
                cách an toàn sau khi giao nhận.</p>
        </div>
        <div class="w-1/2 px-2">
            <p class="text-center">Hóa đơn gửi hàng</p>
            <form class="flex flex-col " action="">
                <input type="text" placeholder="Tên người gửi">
                <input type="number" placeholder="số điện thoại người gửi">
                <input type="text" placeholder="Địa chỉ người gửi (ghi địa chỉ cụ thể gồm số nhà , tên đường ...)">
                <input type="text" placeholder="Tên người nhận">
                <input type="number" placeholder="số điện thoại người nhận">
                <input type="text" placeholder="Địa chỉ người nhận (ghi địa chỉ cụ thể gồm số nhà , tên đường ...)">
                <div class="flex flex-col items-center justify-between">
                    <button type="submit"
                        class=" text-black font-bold 
                    py-2 px-4 rounded focus:outline-none focus:shadow-outline">Tạo
                        hóa đơn</button>
            </form>
        </div>
    </section>
</body>

</html>
