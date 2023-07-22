<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;
use App\Models\User;
use App\Models\Destinasi;
use App\Models\PesananModel;
use DB;
class TestimoniController extends Controller
{
   
    public function index()
    {
        $testimoni = Testimoni::all();
        $user = User::all();
        return view('admin.testimoni.index', compact('testimoni','user'));
    }

    
    public function create($id)
    {
        $www = $id;
        // $auth::id();
        // $ntah = Testimoni::where('id_pesanan', $www)->get();
        $pesanan = PesananModel::all();
        $testi = Testimoni::all();
        $destinasi = Destinasi::all();
        $user = User::all();
        return view('admin.testimoni.create', compact('testi','pesanan','www','user','destinasi'));
    }

    
    public function store(Request $request)
    {
        // dd(request()->all());

        $foto_testi = $request->foto_testi;
        $new_image = time() . $foto_testi->getClientOriginalName();
        $foto_testi->move('foto/', $new_image);

        $pesanan = PesananModel::find($request->id_pesanan);
        $testi = Testimoni::create([
            'id_pesanan' => $request->id_pesanan,
            'id_destinasi' => $pesanan->id_destinasi,
            'id_user' => $request->id_user,
            'komentar' => $request->komentar,
            'foto_testi' => 'foto/' . $new_image,
        ]);
        return redirect('admin/testimoni')->with('success', 'Berhasil Ditambahkan');
    }

   
    public function show(string $id)
    {
        $pesanan = PesananModel::all();
        $user = User::all();
        $destinasi = Destinasi::all();
        $testimoni = Testimoni::findOrfail($id);
        return view('admin.testimoni.show', compact('testimoni', 'pesanan','user','destinasi'));
    }

    
    
    public function destroy(string $id)
    {
        $testimoni = Testimoni::find($id);
        $testimoni->delete();
        return redirect('admin/testimoni')->with('danger', 'data berhasil dihapus');
    }
}
