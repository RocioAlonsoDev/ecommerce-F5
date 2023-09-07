<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminOrders(){
        return view('admin.orders');
    }

    public function adminMenu(){
        return view('admin.menu');
    }

    public function adminAdmins(){
        return view('admin.admins');
    }

    public function adminStats(){
        return view('admin.stats');
    }

    public function adminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
