<script>
    $(document).ready(function() {


        // Thêm sự kiện cho nút toggle-dropdown
        $('.dropdownCoach').click(function() {
            // Lấy data-target từ nút được click
            var targetId = $(this).data('target');

            // Toggle hiển thị của dropdown tương ứng
            $('#' + targetId).toggle();
        });
        $.ajax({
            url: "{{ route('ShowTicketBooked', ['id' => $result->id, 'startime' => $result->start_time]) }}",
            method: "GET",
            dataType: "json",
            success: function(response) {
                console.log(response);

                var bookedTickets = Array.isArray(response) ? response : [];
                // Kiểm tra giá trị đã được đặt và thay đổi màu sắc
                $("p.tiket").each(function() {
                    var value = $(this).data('value');
                    if (bookedTickets.includes(value)) {
                        $(this).addClass('bg-red-500');
                        $(this).off('click'); // Vô hiệu hóa sự kiện click
                    }
                });

            },
            error: function(xhr, status, error) {
                console.error("Đã xảy ra lỗi khi lấy ID từ máy chủ:", error);
            }
        });
        // Xử lý sự kiện khi người dùng click vào phần tử p
        var selectedValues = [];

        $("p.tiket").click(function() {
            var paragraphValue = $(this).data('value');
            var index = selectedValues.indexOf(paragraphValue);

            // Kiểm tra xem ghế đã được chọn chưa và có thể chọn thêm ghế mới không
            if (index === -1) {
                if (selectedValues.length < 4) {
                    selectedValues.push(paragraphValue);
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

        $('button.buttonBookTiket').click(function() {
            // Gửi dữ liệu đã chọn lên server bằng AJAX

            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            if (selectedValues.length !== 0) {
                var ticketId = $(this).data('ticket-id');
                var startTime = $(this).data('start-time');
                console.log(ticketId, startTime)
                $.ajax({
                    type: 'post',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    url: "{{ route('CreateBookTicket', ['id' => $result->id, 'startime' => $result->start_time]) }}",
                    data: {
                        id: ticketId,
                        startime: startTime,
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

    })
</script>


{{-- a --}}
$.ajax({
url: " {{ route('ShowTicketBooked', ['id' => $result->id, 'startime' => $result->start_time]) }}",
method: "GET" , dataType: "json" , success: function(response) { console.log(response); var
bookedTickets=Array.isArray(response) ? response : []; // Kiểm tra giá trị đã được đặt và thay đổi màu sắc
$("p.tiket").each(function() { var value=$(this).data('value'); if (bookedTickets.includes(value)) {
$(this).addClass('bg-red-500'); $(this).off('click'); // Vô hiệu hóa sự kiện click } }); }, error: function(xhr,
status, error) { console.error("Đã xảy ra lỗi khi lấy ID từ máy chủ:", error); } });
