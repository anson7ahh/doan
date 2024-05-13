<?php

namespace Modules\AdminModule\App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\InvoicePassenger;
use App\Models\ItineraryManagement;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class AdminTicketManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $itineraryManagements = ItineraryManagement::join('coaches', 'coaches.id', '=', 'itinerary_management.coaches_id')
            ->join('itineraries', 'itineraries.id', '=', 'itinerary_management.itineraries_id')
            ->select(
                'coaches.license_plate',
                'itinerary_management.start_time',
                'itinerary_management.end_time',
                'itineraries.starting_poin',
                'itineraries.destination',
                'itinerary_management.id'
            )->orderby('itinerary_management.start_time', 'desc')
            ->get();
        $tickets = Ticket::join('itinerary_management', 'itinerary_management.id', '=', 'tickets.itinerary_management_id')
            ->select('tickets.id as tickets_id', 'tickets.phoneNumber', 'tickets.seat_position', 'tickets.status', 'tickets.userName', 'itinerary_management.id')
            ->get();
        return view('adminmodule::AdminTicketManager', ['itineraryManagements' => $itineraryManagements, 'tickets' => $tickets]);
    }




    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $status = $request->input('newStatus');
        $phoneNumber = $request->input('phoneNumber');
        $ticketupdate = Ticket::where('id', $id)->update([
            'status' => $status,
            'phoneNumber' => $phoneNumber
        ]);
        return response()->json([
            'status' => 200,
            'message' => 'success',
            'phoneNumber' =>  $phoneNumber,
            'status' => $status,

        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        Ticket::where('id', $id)->delete();

        return back();
    }
}