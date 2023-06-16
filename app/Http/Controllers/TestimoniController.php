<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;
use App\Models\PesananModel;
use DB;
class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['data_testimoni'] = testimoni::all();
        return view('admin.testimoni.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $testi['pesanan'] = PesananModel::all();
        $testi['testimoni'] = Testimoni::all();
        return view('admin.testimoni.create', $testi);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(request()->all());

        $request->validate([
            'id_pesanan' => ['required'],
            'foto_testi' => ['required'],
            'komentar' => ['required']
    
        ]);
        $testi = Testimoni::create([
            'id_pesanan' => $request->id_pesanan,
            'foto_testi' => $request->foto_testi,
            'komentar' => $request->komentar,
        ]);
        return redirect('admin/testimoni')->with('success', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //$pesanan = PesananModel::all();
        $pesanan = PesananModel::all();
        $testimoni = Testimoni::findOrfail($id);
        return view('admin.testimoni.show', compact('testimoni', 'pesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pesanan = PesananModel::all();
        $testimoni = Testimoni::findOrfail($id);
        return view('admin.testimoni.edit', compact('testimoni', 'pesanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'id_pesanan' => ['required'],
            'foto_testi' => ['required'],
            'komentar' => ['required']
        ]);
 
        $testi = TestimoniModel::findorfail($id);
        $testimoni_data = [
            'id_pesanan' => $request->id_pesanan,
            'foto_testi' => $request->foto_testi,
            'komentar' => $request->komentar,
 
            ];
 
        $testi->update($testimoni_data);
        return redirect('admin/testimoni')->with('success','Data testimoni anda berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
