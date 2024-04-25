<?php

namespace Modules\AuthModule\App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cookie;

class LogoutController extends Controller
{


    public function destroy(Request $request)
    {
        $request->session()->invalidate();


        Auth::guard('web')->logout();

        Cookie::forget('login');
        return redirect('/');
    }
}