<?php

namespace Modules\UserModule\App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
                ->join('itinerary_management', 'coaches.id', '=', 'itinerary_management.coaches_id')
                ->join('itineraries', 'itinerary_management.itineraries_id', '=', 'itineraries.id')
                ->join('price_tickets', 'itineraries.id', '=', 'price_tickets.itineraries_id')
                ->select(
                    'coaches.vehicle_type',
                    'price_tickets.price',
                    'itinerary_management.start_time',
                    'itineraries.starting_poin',
                    'itineraries.destination',
                    'coaches.id'
                )
                ->where('coaches.service', '=', 'user')
                ->get();

            return view('usermodule::PassengerTransportationService', ['results' => $results]);
        } else {


            $results = DB::table('coaches')
                ->join('itinerary_management', 'coaches.id', '=', 'itinerary_management.coaches_id')
                ->join('itineraries', 'itinerary_management.itineraries_id', '=', 'itineraries.id')
                ->join('price_tickets', 'itineraries.id', '=', 'price_tickets.itineraries_id')
                ->select(
                    'coaches.vehicle_type',
                    'price_tickets.price',
                    'itinerary_management.start_time',
                    'itineraries.starting_poin',
                    'itineraries.destination',
                    'coaches.id'
                )
                ->where('coaches.service', '=', 'user')
                ->where('itineraries.starting_poin', '=', $startingPoin)
                ->where('itineraries.destination', '=', $destination)
                ->whereDate('itinerary_management.start_time', '=', Carbon::parse($date))
                ->get();

            return view('usermodule::PassengerTransportationService', ['results' => $results]);
        }
    }


    public function ShowTicketBooked($id)
    {

        $datas = DB::table('coaches')
            ->join('tickets', 'tickets.coaches_id', '=', 'coaches.id')
            ->select(
                'tickets.seat_position'
            )
            ->where('coaches.id', '=', $id)
            ->get();


        return response()->json([
            'status' => 200,
            'message' => 'success',
            'datas' => $datas,

        ]);;
    }


    public function BookTicket(Request $request, $id)
    {
        try {
            $user = Auth::user();
            $selectedValues = $request->input('selectedValues');
            $user = Auth::guard('web')->user();

            foreach ($selectedValues as $value) {
                DB::table('tickets')->insert([
                    'seat_position' => $value,
                    'coaches_id' => $id,
                    'userName' => $user->name,
                    'phoneNumber' => $user->phone_number,
                    'user_id' => $user->id,
                ]);
            }

            DB::table('invoice_passengers')->insert([
                'coaches_id' => $id,
                'users_id' => $user->id,
            ]);
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