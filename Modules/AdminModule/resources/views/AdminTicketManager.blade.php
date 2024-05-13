@extends('adminmodule::layouts.master')

@section('content')
    {{-- @php
        dd($tickets);
    @endphp --}}

    @foreach ($itineraryManagements as $itineraryManagement)
        <table class="min-w-full divide-y divide-gray-200">

            <thead class="bg-blue-200">
                <tr class="bg-gray-50">
                    <th class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">
                        Xe:{{ $itineraryManagement->license_plate }}</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">Tuyến
                        :{{ $itineraryManagement->starting_poin }}-{{ $itineraryManagement->destination }}
                    </th>

                    <th class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">
                        {{ $itineraryManagement->start_time }}
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">
                        {{ $itineraryManagement->end_time }}</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 h-80 overflow-y-scroll overflow-hidden">


                @foreach ($tickets as $ticket)
                    @if ($ticket->id == $itineraryManagement->id)
                        <tr class="bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap ">Tên: {{ $ticket->userName }}</td>
                            <td class="px-6 py-2 whitespace-nowrap" contenteditable
                                id="phoneNumber-{{ $ticket->tickets_id }}">
                                {{ $ticket->phoneNumber }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">Vị trí: {{ $ticket->seat_position }}</td>

                            <td><select id="status-{{ $ticket->tickets_id }}">
                                    <option value="notpay" {{ $ticket->status == 'notpay' ? 'selected' : '' }}>Chưa thanh
                                        toán</option>
                                    <option value="pay" {{ $ticket->status == 'pay' ? 'selected' : '' }}>Đã thanh toán
                                    </option>
                                </select>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap gap-5">
                                <button onclick="updateTicket({{ $ticket->tickets_id }})"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Cập
                                    nhật</button>

                                <a onclick=" return confirm('ban co chac chan muon xoa')"
                                    href="{{ route('Ticket.destroy', ['id' => $ticket->tickets_id]) }}"
                                    class="bg-red-500 hover:underline text-white font-bold py-1 px-2 rounded">Hủy</a>
                            </td>
                        </tr>
                    @endif
                @endforeach

            </tbody>
        </table>
    @endforeach

    <script>
        function updateTicket(ticketId) {
            var newStatus = document.getElementById('status-' + ticketId).value;
            var updateTicketUrl = "{{ route('Ticket.update', ['id' => ':ticketId']) }}";
            var phoneNumber = document.getElementById('phoneNumber-' + ticketId).innerText;
            $.ajax({
                type: "POST",
                url: updateTicketUrl.replace(':ticketId', ticketId),
                data: {
                    ticketId: ticketId,
                    newStatus: newStatus,
                    phoneNumber: phoneNumber,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    // Update UI if necessary
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }
    </script>
@endsection
