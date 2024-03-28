<?php

namespace Modules\AuthModule\App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('authmodule::index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authmodule::login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
            if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
                $userdetail = Auth::user();
    
                $user = User::find($userdetail->id);
    
                $token = $user->createToken('myApp')->accessToken;
    
                return response()->json(['token' => $token], 200);
            }
            return response()->json('The account does not exist', 400);
        
    }

    /**
     * Show the specified resource.
     */
   
        public function getUserDetail()
        {
            if (Auth::guard('api')->check()) {
                $user = Auth::guard('api')->user();
                return Response(['data' => $user], 200);
            }
            return Response(['data' => 'Unauthorized'], 401);
        }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('authmodule::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}