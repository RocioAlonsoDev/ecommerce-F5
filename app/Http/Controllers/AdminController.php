<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

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

        return redirect('/admin/login');
    }

    public function adminLogin(Request $request)
    {
        return view('admin.admin-login');
    }

    public function adminProfile()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('admin.admin-profile',compact('profileData'));
    }

    public function adminProfileUpdate(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->surname = $request->surname;
        $data->email = $request->email;

        $data->save();

        $notification = array(
            'message' => 'Tu perfil se ha actualizado con éxito.',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
