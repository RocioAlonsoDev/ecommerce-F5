<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Hash;

class UserController extends Controller
{
    // public function index()
    // {
      
    // }

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

    public function login(Request $request){
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

    public function logout(){
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }

    public function show(User $user)
    {
        $users = User::find($user);

        return view('user.user')->with('user', $user);
    }

    // public function edit(User $user)
    // {
    //     //
    // }

    // public function update(Request $request, User $user)
    // {
    //     //
    // }

    // public function destroy(User $user)
    // {
    //     //
    // }
}
