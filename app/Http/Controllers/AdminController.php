<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class AdminController extends Controller
{
    public function adminIndex(){
        return view('admin.admin-index');
    }

    public function adminOrders(){
        return view('admin.orders');
    }

    public function adminMenu(){
        return view('admin.menu');
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

    public function adminPasswordChange(Request $request)
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('admin.password-change', compact('profileData'));
    }
    
    public function adminPasswordUpdate(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        if(!Hash::check($request->old_password, auth::user()->password)){
            $notification = array(
                'message' => 'Tu contraseña actual no coincide.',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array(
            'message' => 'Tu contraseña ha sido actualizada.',
            'alert-type' => 'success'
        );
        return back()->with($notification);

        
    }
}
