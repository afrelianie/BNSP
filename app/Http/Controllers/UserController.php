<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Iluminate\Support\Facades\DB;

class UserController extends Controller
{
   
    public function index()
    {
        $data['list_user'] = user::all();
        return view('admin.user.index', $data);
    }


    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        // dd(request()->all());
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'no_hp' => ['required'],
            'alamat' => ['required'],
            'password' => ['required'],
            'role' => ['required']
        ],[
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email Pesanan wajib diisi',
            'no_hp.required' => 'No HP wajib diisi', 
            'alamat.required' => 'Alamat wajib diisi',
            'password.required' => 'Password wajib diisi',
            'role.required' => 'Level pengguna wajib diisi', 
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'password' => $request->password,
            'role' => $request->role,
        ]);
        return redirect('admin/user')->with('success', 'Berhasil Ditambahkan');
    }


    public function Show(user $user)
    {
        $data['user'] = $user;
        return view('user.show', $data);
    }
    
    // public function edit(user $user)
    // {
    //     $data['user'] = $user;
    //     return view('admin.user.edit', $data);
    // }

    public function edit(string $id)
    {
        $data['user'] = User::findOrfail($id);
        return view('admin.user.edit', $data);

    }
    

    public function update(Request $request, string $id)
    {
        //  dd(request()->all());

        $user = User::findorfail($id);
        if ($request->has('profil')) {
            if ($user->image <> "") {
                unlink(public_path('/') . '/' . $user->image);
                }
            $image = $request->profil;
            $new_image = time().$image->getClientOriginalName();
            $image->move('img/', $new_image);
            $user_data = [
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'password' => bcrypt($request->password),
                'profil' => 'img/' . $new_image,
            ];
        }
        else{
            $user_data = [
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'password' => bcrypt($request->password),
            ];
        }
        $user->update($user_data);
        return redirect('admin/user')->with('success','Berhasil Diupdate');

    }


   

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/user')->with('danger', 'data berhasil dihapus');
    }

   
}
