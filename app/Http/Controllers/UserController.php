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
    
    public function edit(user $user)
    {
        $data['user'] = $user;
        return view('admin.user.edit', $data);
    }
    

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|min:3|max:37',
        ]);

        if($request->input('password')) {
            $user_data = [
            'name' => $request->name,
            'password' => bcrypt($request->password)
            ];
        }
        else{
            $user_data = [
            'name' => $request->name,
            ];
        }

        $user = User::find($id);
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
