<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }


    function proses_login()
    {
        if (Auth()->attempt(['name' => request('name'), 'password' => request('password')])) {
            $hakAkses = Auth::user()->role;
            if ($hakAkses == "admin") {
                return redirect('admin/home')->with('success', 'login berhasil');
            }elseif ($hakAkses == "user") {
                return redirect('user')->with('success', 'login berhasil');
            }
        }

        return back()->with('danger', 'login gagal, silahkan cek username dan password anda');
    }

    public function daftar(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required'],
            'role' => ['required'],
            'email' => ['required'],
            'nik' => ['required'],
            'nib' => ['required'],
            'password' => ['required'],
        ]);
        // $this->validate($request,[
        //     'name' => 'required|min:3|max:37',
        //     'email' => 'required|email',
        //     'nik' => 'required|min:16|max:16',
        //     'role' =>'required',
        //     'nib' =>'required|min:6|max:6',
        //     'password' =>'required|min:5|max:37',
        // ]);

        User::create([
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'nik' => $request->nik,
            'nib' => $request->nib,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('login');
    }
}
