<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerAction(Request $request) {
        if ($request->password == $request->confirm_password) {
            $usernameExist = User::where("username", $request->username)->first();
            if ($usernameExist) {
                session()->flash('error', 'Username sudah digunakan!');

                return redirect('/auth/register');
            }

            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'admin' => false,
                'password' => Hash::make($request->password),
            ]);
            session()->flash('success', 'Akun berhasil dibuat!');
            return redirect('/auth/register');
        }
            else {
                session()->flash('error', 'Konfirmasi password anda salah!');
                 return redirect('/auth/register');

        }
    }

    public function loginAction(Request $request) {
        $data = [
            'username' => $request->username,
            'password' => $request->password,
        ];

       // jika berhasil login
       if (Auth::attempt($data)) {
        $user = User::where($request->username);
        $isAdmin = Auth::user()->admin;

        // buka dashboard admin
        if ($isAdmin === '1') {
            return redirect(route("datahotel.homeadmin"));
        }

        // buka home user
        return redirect(route("user.home"))->with("success", "Welcome back, $request->username!");
    }

    // jika gagal login
    return redirect(route("auth.login"))->with("error", "Wrong username or password!");
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
