<?php

namespace Modules\AuthModule\App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class LoginAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('authmodule::AdminLogin');
    }



    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'phone_number' => 'required',
                'password' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator->errors())
                    ->withInput();
            }

            if (!Auth::attempt(['phone_number' => request('phone_number'), 'password' => request('password')])) {
                return redirect()->back()->withErrors(['message' => 'Tài khoản hoặc mật khẩu không đúng']);
            }
            $userdetail = Auth::user();
            $user = User::find($userdetail->id);
            $token = $user->createToken('accessToken')->plainTextToken;
            return response()->redirectTo('/admin/quan-ly-ve-xe')->withCookie(cookie('loginAdmin', $token, 60 * 24 * 30,  '/', NULL, TRUE, TRUE));
        } catch (\Exception $error) {
            return response()->json([
                'status_code' => 500,
                'message' => 'Error in Login',
                'error' => $error,
            ]);
        }
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('authmodule::show');
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
    public function update(Request $request, $id): RedirectResponse
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