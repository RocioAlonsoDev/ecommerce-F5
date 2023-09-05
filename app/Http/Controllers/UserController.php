<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Hash;

class UserController extends Controller
{
    

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'surname' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User;

        $user->email = $request->email;
        $user->password = $request->password;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->newsletter = $request->newsletter;

        $user->save();

        return view('user.success',['email'=>$request->email]);
        

        die();
    }

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("user/login")->withSuccess('Oppes! You have entered invalid credentials');

    }

    public function logout(User $user)
    {
        Session::flush();
        Auth::logout();

        return redirect('/user/login');
    }

    public function show(User $user)
    {
        $users = User::find($user);

        return view('user.user')->with('user', $user);
    }

    public function edit(User $user)
    {
        return view('user.edit')->with('user', $user);;
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'surname' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);


        $user->email = $request->email;
        $user->password = $request->password;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->newsletter = $request->newsletter;
        
        $user->save();

        return redirect("/user/$user->user_id}")->with('success', 'Order Data has been updated successfully');
    }

    public function destroy($user_id)
    {
        $user = User::find($user_id);
    
        if (!$user) {
            return redirect()->route("/user/{$user_id}")->with('error', 'No se ha podido eliminar el usuario, intente de nuevo más tarde.');
        }
    
        $user->delete();
    
        return redirect('/')->withSuccess('Tu usuario se ha eliminado permanentemente.');
    }
    
    // public function index()
    // {
    //     $perPage = 5;
    //     $data = User::latest()->paginate($perPage);

    //     return view('user.index', compact('data'));
    // }
}
