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
                return redirect('/')->with('success', 'login berhasil');
            }
        }

        return back()->with('danger', 'login gagal, silahkan cek username dan password anda');
    }


    public function register()
    {
        return view('auth.register');
    }


    public function proses_register(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'unique:users,name'],
            'role' => ['required'],
            'no_hp' => ['required'],
            'email' => ['required', 'unique:users,email'],
            'alamat' => ['required'],
            'password' => ['required'],
        ]);
        $this->validate($request,[
            'name' => 'required|min:3|max:37',
            'role' =>'required',
            'no_hp' => 'required|min:12|max:14',
            'email' => 'required|email',
            'alamat' =>'required',
            'password' =>'required|min:5|max:37',
        ]);

        User::create([
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('login');
    }

    public function lupaSandi()
    {
        return view('auth.forget');
    }


    public function konfirPassword(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            $data['user'] = $user; // Menggunakan $data['user'] untuk menyimpan data pengguna
            return view('auth.update', $data)->with('success', 'Email Anda ditemukan');
        } 
        else {
            return redirect('lupaSandi')->with('danger', 'Email konfirmasi Anda tidak ditemukan');
        }
    }


    public function update()
    {
         return view('auth.update');
    }


    public function updateSandi(Request $request, User $user)
    {
        $oldPassword = $request->old;
        $newPassword = $request->new;

        if ($oldPassword === $newPassword) {
            $user->password = bcrypt($oldPassword);
            $user->update();
            return redirect('login')->with('success', 'Silahkan login menggunakan password baru anda');
        }
        return redirect('lupaSandi')->with('danger', 'Konfirmasi password baru tidak sama');
    }

}
