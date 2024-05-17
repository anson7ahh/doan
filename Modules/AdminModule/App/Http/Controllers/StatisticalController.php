<?php

namespace Modules\AdminModule\App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class StatisticalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $saleByMonths = DB::table('invoice_passengers')
            ->join('itinerary_management', 'invoice_passengers.itinerary_management_id', '=', 'itinerary_management.id')
            ->join('tickets', 'tickets.id', '=', 'invoice_passengers.ticket_id')
            ->select(
                DB::raw("DATE_FORMAT(itinerary_management.start_time, '%m-%Y') as month"),
                DB::raw('SUM(itinerary_management.price) as total_prices'),
                DB::raw('COUNT(invoice_passengers.id) as total_tickets')
            )->where('tickets.status', '=', 'pay')
            ->groupBy('month')
            ->get();


        $salesByMonthAndRoute =
            DB::table('invoice_passengers')
            ->join('itinerary_management', 'invoice_passengers.itinerary_management_id', '=', 'itinerary_management.id')
            ->join('coaches', 'invoice_passengers.coaches_id', '=', 'coaches.id')
            ->join('itineraries', 'itinerary_management.itineraries_id', '=', 'itineraries.id')
            ->join('tickets', 'tickets.id', '=', 'invoice_passengers.ticket_id')
            ->select(
                'itineraries.starting_poin',
                'itineraries.destination',
                DB::raw("DATE_FORMAT(itinerary_management.start_time, '%m-%Y') as month"),
                DB::raw('SUM(itinerary_management.price) as total_sales'),
                DB::raw('COUNT(invoice_passengers.id) as total_tickets')
            )
            ->where('tickets.status', '=', 'pay')
            ->groupBy(
                DB::raw("DATE_FORMAT(itinerary_management.start_time, '%m-%Y')"),
                'itineraries.starting_poin',
                'itineraries.destination'
            )
            ->get();


        $salesByMonthFreight = DB::table('invoice_freghts')
            ->select(
                DB::raw("DATE_FORMAT(invoice_freghts.created_at, '%Y-%m') as month"),
                DB::raw('SUM(invoice_freghts.price) as total_price'),
                DB::raw('COUNT(invoice_freghts.id) as total_invoice')
            )
            ->where('invoice_freghts.status', '=', 'finish')
            ->groupBy(DB::raw("DATE_FORMAT(invoice_freghts.created_at, '%Y-%m')"))
            ->get();
        return view('adminmodule::AdminStatistical', ['saleByMonths' => $saleByMonths, 'salesByMonthAndRoute' => $salesByMonthAndRoute, 'salesByMonthFreight' => $salesByMonthFreight]);
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('adminmodule::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('adminmodule::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}