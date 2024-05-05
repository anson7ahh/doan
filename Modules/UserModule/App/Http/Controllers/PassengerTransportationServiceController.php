<?php

namespace Modules\UserModule\App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Coach;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\InvoicePassenger;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PassengerTransportationServiceController extends Controller
{

    //  tìm kiếm vé xe
    public function SearchItinerary(Request $request)

    {
        $startingPoin = $request->input('startingPoin');
        $destination = $request->input('destination');
        $date = $request->input('date');


        if (!$startingPoin && !$date && !$destination) {

            $results = Coach::join('itinerary_management', 'coaches.id', '=', 'itinerary_management.coaches_id')
                ->join('itineraries', 'itinerary_management.itineraries_id', '=', 'itineraries.id')
                ->join('price_tickets', 'itineraries.id', '=', 'price_tickets.itineraries_id')

                ->select(
                    'coaches.vehicle_type',
                    'price_tickets.price',
                    'itinerary_management.start_time',
                    'itineraries.starting_poin',
                    'itineraries.destination',
                    'coaches.id',
                    'itinerary_management.id AS itinerary_management_id'
                )
                ->where('coaches.service', '=', 'user')
                ->get();
            $ticketBookes = InvoicePassenger::join('tickets', 'tickets.id', '=', 'invoice_passengers.ticket.id')
                ->select(
                    'invoice_passengers.coches_id',
                    'invoice_passengers.itinerary_management_id',
                    'tickets.seat_position'
                )
                ->get();
            return view('usermodule::PassengerTransportationService', ['results' => $results, 'ticketBookes' => $ticketBookes]);
        } else {


            $results = Coach::join('itinerary_management', 'coaches.id', '=', 'itinerary_management.coaches_id')
                ->join('itineraries', 'itinerary_management.itineraries_id', '=', 'itineraries.id')
                ->join('price_tickets', 'itineraries.id', '=', 'price_tickets.itineraries_id')
                ->select(
                    'coaches.vehicle_type',
                    'price_tickets.price',
                    'itinerary_management.start_time',
                    'itineraries.starting_poin',
                    'itineraries.destination',
                    'coaches.id',
                    'itinerary_management.id AS itinerary_management_id'
                )
                ->where('coaches.service', '=', 'user')
                ->where('itineraries.starting_poin', '=', $startingPoin)
                ->where('itineraries.destination', '=', $destination)
                ->whereDate('itinerary_management.start_time', '=', Carbon::parse($date))
                ->get();


            $ticketBookes = InvoicePassenger::join('tickets', 'tickets.id', '=', 'invoice_passengers.ticket.id')
                ->select(
                    'invoice_passengers.coches_id',
                    'invoice_passengers.itinerary_management_id',
                    'tickets.seat_position'
                )
                ->get();
            return view('usermodule::PassengerTransportationService', ['results' => $results, 'ticketBookes' => $ticketBookes]);
        }
    }


    public function ShowTicketBooked($id, $itinerary_management_id)
    {

        $data = Coach::join('tickets', 'tickets.coaches_id', '=', 'coaches.id')
            ->join('itinerary_management', 'itinerary_management.coaches_id', '=', 'coaches.id')
            ->select(
                'tickets.seat_position'
            )
            ->where('coaches.id', '=', $id)
            ->where('itinerary_management.id', '=', $itinerary_management_id)
            ->get();
        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => $data,

        ]);;
    }


    public function CreateBookTicket(Request $request, $id, $itinerary_management_id)
    {
        try {
            $user = Auth::user();
            $selectedValues = $request->input('selectedValues');
            foreach ($selectedValues as $value) {
                $ticketId = Ticket::join('coaches', 'coaches.id', '=', 'tickets.coaches_id')
                    ->join('itinerary_management', 'itinerary_management.coaches_id', '=', 'coaches.id')
                    ->where('itinerary_management.id', '=', $itinerary_management_id)
                    ->where('coaches.id', '=', $id)
                    ->insertGetId([
                        'seat_position' => $value,
                        'coaches_id' => $id,
                        'userName' => $user->name,
                        'phoneNumber' => $user->phone_number,
                        'user_id' => $user->id,
                    ]);

                InvoicePassenger::insert([
                    'ticket_id' => $ticketId, // Sử dụng $ticketId thay vì $tickets->id
                    'coaches_id' => $id,
                    'user_id' => $user->id,
                    'itinerary_management_id' => $itinerary_management_id
                ]);
            }
            return response()->json([
                'status' => 200,
                'message' => 'success',
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'status_code' => 500,
                'error' => $error,
            ]);
        }
    }
}