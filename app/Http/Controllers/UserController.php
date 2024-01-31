<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function register(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|unique:users',
            'password' => 'required',
            'email' => 'required|unique:users',
            'c_password' => 'required|same:password',

        ], [
            'name.required' => 'ho ten can nhap',
            'email.required' => 'email bat buoc phai nhap',
            'password.required' => 'password bat buoc phai nhap',
            'c_password.required' => 'password bat buoc phai nhap',
            'name.unique' => 'tên đăng kí đã tồn tại',
            'email.unique' => 'email đã được sử dụng',
            'c_password.same' => 'password không khớp'
        ]);
        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }
        $user = new user();
        $user->name = $request->input('name');
        $user->password = Hash::make($request->input('password'));
        $user->c_password = Hash::make($request->input('c_password'));
        $user->email = $request->input('email');
        $user->save();
        $user->assignRole('user');
        return response()->json(['user' => $user]);
    }

    public function login(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'email'           => 'required|max:255|email',
            'password'           => 'required|confirmed',
        ]);
        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }
        if (Auth::attempt($validate)) {
            $userdetail = Auth::user();

            $user = User::find($userdetail->id);

            $token = $user->createToken('myApp')->accessToken;

            return response()->json(['token' => $token], 200);
        }
        return response()->json('The account does not exist', 400);
    }
}
