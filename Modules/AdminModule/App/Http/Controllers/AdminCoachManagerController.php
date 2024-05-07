<?php

namespace Modules\AdminModule\App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class AdminCoachManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coaches = Coach::get();

        return view('adminmodule::CoachManager', ['coaches' => $coaches]);
    }



    public function store(Request $request)
    {
        //
    }


    public function destroy($id)
    {
        Coach::where('id', $id)->delete();

        return back();
    }
}