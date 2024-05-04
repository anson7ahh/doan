<?php

namespace Modules\UserModule\App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('usermodule::Invoices');
    }



    public function storeInvoice(Request $request)
    {
        $user = Auth::guard('web')->user();
        if ($user) {
            $results = DB::table('users')
                ->join('tickets', 'users.id', '=', 'tickets.user_id')
                ->join('coaches', 'coaches.id', '=', 'tickets.coaches_id')
                ->join('itinerary_management', 'itinerary_management.coaches_id', '=', 'coaches.id')
                ->join('itineraries', 'itineraries.id', '=', 'itinerary_management.itineraries_id')
                ->join('price_tickets', 'price_tickets.itineraries_id', '=', 'itineraries.id')
                ->select(
                    'tickets.id',
                    'tickets.seat_position',
                    'users.name',
                    'users.phone_number',
                    'coaches.license_plate',
                    'price_tickets.price',
                    'itineraries.starting_poin',
                    'itineraries.destination',
                    'itinerary_management.start_time',
                    'itinerary_management.end_time'
                )

                ->where('tickets.user_id', '=', $user->id)
                ->get();

            $datas = DB::table('invoice_freghts')
                ->select(
                    'id',
                    'recipient_name',
                    'recipient_phone_number',
                    'sender_name',
                    'sender_phone_number',
                    'recipient_address',
                    'sender_address'
                )
                ->where('user_id', $user->id)
                ->orderBy('created_at', 'ASC')
                ->get();

            return view('usermodule::Invoices', ['results' => $results, 'datas' => $datas]);
        }
        return view('usermodule::Invoices', ['message' => 'Bạn cần đằng nhập để xem thêm thông tin ']);
    }


    public function destroytickets($id)
    {
        DB::table('tickets')->where('id', $id)->delete();
        DB::table('invoice_freghts')->where('id', $id)->delete();
        return back();
    }
}