<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class UserController extends Controller
{
    public function register()
    {
        return view("user/register");
    }

    public function processRegister(request $request)
    {
        $request->validate([
            "name"             => "required",
            "email"            => "required|unique:users",
            "password"         => "required|min:6",
            "reenter_password" => "required|same:password",
        ]);

        $data = $request->all();

        $data['password'] = bcrypt($data['password']);
        $data['level'] = 0; // Member
        
        $user = User::create($data);
        
        event(new Registered($user));

        return redirect("user/register-success/{$user->id}")->withSuccess("Pendaftaran berhasil!");
    }

    public function login()
    {
        return view("user/login");
    }

    public function registerSuccess($userID)
    {
        return view("user/register_success", [
            "userID" => $userID,
        ]);
    }

    public function processLogin(Request $request) {
        // Form Validation
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // dd($credentials);

        // Proses Validasi User
        if (Auth::attempt($credentials)== true) {
            $request->session()->regenerate();

            // dd("Berhasil Login");

            if (Auth::user()->type == 0) { // MEMBER
                return redirect('member');
            } else { //ADMIN
                return redirect('member/list');
            }
    
        } else {

            // dd("Gagal Login");

            return redirect('user/login')->withErrors('Login Gagal');
        }
    }

    public function processLogout() {
        Auth::logout();

        return redirect('/user/login');
    }
}
