<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PesananModel;
use App\Models\Destinasi;
use App\Models\Testimoni;

use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->PesananModel = new PesananModel();
        $this->Destinasi = new Destinasi();
        $this->Testimoni = new Testimoni();
        $this->User = new User();
    }
    
    public function profil(){

        return view('pelanggan.profile');
    }


    public function profil_update(Request $request, $id)
    {

        $update = User::findorfail($id);
        if ($request->has('profil')) {
            $image = $request->profil;
            $new_image = time().$image->getClientOriginalName();
            $image->move('img/', $new_image);
            $update_data = [
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'password' => bcrypt($request->password),
                'profil' => 'img/' . $new_image,
            ];
        }
        else{
            $update_data = [
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'password' => bcrypt($request->password),
            ];
        }
        $update->update($update_data);
        return back()->with('success','Profile anda berhasil di Update');
    }


    public function index()
    {
        //
    }





    

    



}
