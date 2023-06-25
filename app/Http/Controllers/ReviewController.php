<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;
use App\Models\PesananModel;
use DB;

class ReviewController extends Controller
{
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('pelanggan.review.index', compact('testimoni'));
    }

    
    public function create($id)
    {
        $www = $id;
    
        $pesanan = PesananModel::all();
        $testi = Testimoni::all();
        return view('pelanggan.review.create', compact('testi','pesanan','www'));
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
        return redirect('pelanggan/review')->with('success', 'Berhasil Ditambahkan');
    }

   
    public function show(string $id)
    {
        $pesanan = PesananModel::all();
        $testimoni = Testimoni::findOrfail($id);
        return view('pelanggan.review.show', compact('testimoni', 'pesanan'));
    }
}
