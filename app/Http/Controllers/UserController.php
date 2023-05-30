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

    public function Store()
    {
        $user = new user;
        $user->name = request('name');
        $user->email = request('email');
        $user->no_hp = request('no_hp');
        $user->role = request('role');
        $user->alamat = request('alamat');
        $user->password = bcrypt(request('password'));
        $user->save();
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


    public function destroy(user $user)
    {
        $user->delete();
        return redirect('admin/user')->with('danger', 'data berhasil dihapus');
    }

   
}
