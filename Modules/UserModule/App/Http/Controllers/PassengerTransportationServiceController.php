<?php

namespace Modules\UserModule\App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\RedirectResponse;

use function PHPUnit\Framework\isEmpty;

class PassengerTransportationServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('usermodule::PassengerTransportationService');
    }


    //  tìm kiếm vé xe


    public function SearchItinerary(Request $request)

    {
        $startingPoin = $request->input('startingPoin');
        $destination = $request->input('destination');
        $date = $request->input('date');


        if (!$startingPoin && !$date && !$destination) {

            $results = DB::table('coaches')
                ->join('coach_management', 'coaches.id', '=', 'coach_management.coaches_id')
                ->join('itinerary_management', 'coach_management.itinerary_management_id', '=', 'itinerary_management.id')
                ->join('itineraries', 'itinerary_management.itineraries_id', '=', 'itineraries.id')
                ->join('price_tickets', 'itineraries.id', '=', 'price_tickets.itineraries_id')
                ->select(
                    'coaches.vehicle_type',
                    'price_tickets.price',
                    'itinerary_management.start_time',
                    'itineraries.starting_poin',
                    'itineraries.destination',
                    'coaches.id',

                )
                ->where('coaches.service', '=', 'user')

                ->get();

            return view('usermodule::PassengerTransportationService', ['results' => $results]);
        } else {
            $results = DB::table('coaches')
                ->join('coach_management', 'coaches.id', '=', 'coach_management.coaches_id')
                ->join('itinerary_management', 'coach_management.itinerary_management_id', '=', 'itinerary_management.id')
                ->join('itineraries', 'itinerary_management.itineraries_id', '=', 'itineraries.id')
                ->join('price_tickets', 'itineraries.id', '=', 'price_tickets.itineraries_id')
                ->select(
                    'coaches.vehicle_type',
                    'price_tickets.price',
                    'itinerary_management.start_time',
                    'itineraries.starting_poin',
                    'itineraries.destination',
                    'coaches.id',

                )
                ->where('coaches.service', '=', 'user')
                ->where('itineraries.starting_poin', '=', $startingPoin)
                ->where('itineraries.destination', '=', $destination)
                ->whereDate('itinerary_management.start_time', '=', Carbon::parse($date))
                ->get();


            return view('usermodule::PassengerTransportationService', ['results' => $results]);
        }
    }


    public function ShowBookTicketdetails($id)
    {

        $results = DB::table('coaches')
            ->join('coach_management', 'coaches.id', '=', 'coach_management.coaches_id')
            ->join('itinerary_management', 'coach_management.itinerary_management_id', '=', 'itinerary_management.id')
            ->join('itineraries', 'itinerary_management.itineraries_id', '=', 'itineraries.id')
            ->join('price_tickets', 'itineraries.id', '=', 'price_tickets.itineraries_id')
            ->select(
                'price_tickets.price',
                'itineraries.starting_poin',
                'itineraries.destination',
                'itinerary_management.start_time',
                'coaches.vehicle_type',
                'coaches.id'

            )
            ->where('coaches.service', '=', 'user')
            ->where('coaches.id', '=', $id)
            ->first();
        return view('usermodule::BookTicket', ['results' => $results]);
    }


    public function BookTicketdetails(Request $request, $id)
    {
        try {
            $token = $request->cookie('login');
            $selectedValues = $request->input('selectedValues');
            if ($token) {
                $table =  DB::table('coaches')
                    ->join('coach_management', 'coach_management.coaches_id', '=', 'coaches.id')
                    ->join('ticket_management', 'ticket_management.coach_management_id', '=', 'coach_management.id')
                    ->join('tickets', 'ticket_management.ticket_id', '=', 'tickets.id')
                    ->select('tickets.seat_position')
                    ->where('coaches.service', '=', $id)
                    ->get();
                foreach ($selectedValues as $value) {

                    //     $table->insert([
                    //         'seat_position' => $value,
                    //     ]);
                }
                return $table;
            } else {
                return redirect('/login');
            }
        } catch (\Exception $error) {
            return response()->json([
                'status_code' => 500,
                'error' => $error,
            ]);
        }
    }
}