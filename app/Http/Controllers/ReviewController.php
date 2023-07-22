<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;
use App\Models\PesananModel;
use App\Models\User;
use App\Models\Destinasi;

use Illuminate\Support\Facades\Auth;

use DB;

class ReviewController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $data['testimoni'] = Testimoni::where('id_user', $userId)->get();

        return view('pelanggan.review.index', $data);
    }

    
    public function create($id)
    {
        $www = $id;
        $destinasi = Destinasi::all();
        $pesanan = PesananModel::all();
        $testi = Testimoni::all();
        return view('pelanggan.review.create', compact('testi','pesanan','www','destinasi'));
    }

    
    public function store(Request $request)
    {
        // dd(request()->all());
        $userId = Auth::id();
        $foto_testi = $request->foto_testi;
        $new_image = time() . $foto_testi->getClientOriginalName();
        $foto_testi->move('foto/', $new_image);
        $pesanan = PesananModel::find($request->id_pesanan);
        $testi = Testimoni::create([
            'id_pesanan' => $request->id_pesanan,
            'id_destinasi' => $pesanan->id_destinasi,
            'id_user' => $userId,
            'komentar' => $request->komentar,
            'foto_testi' => 'foto/' . $new_image,
        ]);
        return redirect('pelanggan/review')->with('success', 'Berhasil Ditambahkan');
    }

   
    public function show(string $id)
    {
        $pesanan = PesananModel::all();
        $user = User::all();
        $pesanan = PesananModel::all();
        $testimoni = Testimoni::findOrfail($id);
        return view('pelanggan.review.show', compact('testimoni', 'pesanan'));
    }
}
