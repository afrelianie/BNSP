<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;
use App\Models\PesananModel;
use DB;
class TestimoniController extends Controller
{
   
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('admin.testimoni.index', compact('testimoni'));
    }

    
    public function create($id)
    {
        $www = $id;
        // $asu = Testimoni::where('id_pesanan', $www)->get();
        $pesanan = PesananModel::all();
        $testi = Testimoni::all();
        return view('admin.testimoni.create', compact('testi','pesanan','www'));
    }

    
    public function store(Request $request)
    {
        // dd(request()->all());

        $foto_testi = $request->foto_testi;
        $new_image = time() . $foto_testi->getClientOriginalName();
        $foto_testi->move('foto/', $new_image);
        $testi = Testimoni::create([
            'id_pesanan' => $request->id_pesanan,
            'komentar' => $request->komentar,
            'foto_testi' => 'foto/' . $new_image,
        ]);
        return redirect('admin/testimoni')->with('success', 'Berhasil Ditambahkan');
    }

   
    public function show(string $id)
    {
        $pesanan = PesananModel::all();
        $testimoni = Testimoni::findOrfail($id);
        return view('admin.testimoni.show', compact('testimoni', 'pesanan'));
    }

    
    
    public function destroy(string $id)
    {
        $testimoni = Testimoni::find($id);
        $testimoni->delete();
        return redirect('admin/testimoni')->with('danger', 'data berhasil dihapus');
    }
}
