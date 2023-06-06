<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PesananController;
use App\Models\PesananModel;
use App\Models\Destinasi;
use Illuminate\Http\Request;

use Iluminate\Support\Facades\DB;

class PesananController extends Controller
{
    public function index()
    {
    
        $data['list_data'] = PesananModel::all();
        return view('admin.pesanan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pesan['destinasi'] = Destinasi::all();
        $pesan['pesanan'] = PesananModel::all();
        return view('admin.pesanan.create', $pesan);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(request()->all());
        $request->validate([
            'id_destinasi' => ['required'],
            'kode_pesanan' => ['required'],
            'tanggal_pesanan' => ['required']
    
        ]);
        $pesanan = PesananModel::create([
            'id_destinasi' => $request->id_destinasi,
            'kode_pesanan' => $request->kode_pesanan,
            'tanggal_pesanan' => $request->tanggal_pesanan,
        ]);
        return redirect('admin/pesanan')->with('success', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $destinasi = Destinasi::all();
        $pesanan = PesananModel::findOrfail($id);
        return view('admin.pesanan.show', compact('pesanan', 'destinasi'));

        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $destinasi = Destinasi::all();
        $pesanan = PesananModel::findOrfail($id);
        return view('admin.pesanan.edit', compact('pesanan', 'destinasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
           'id_destinasi' => ['required'],
           'kode_pesanan' => ['required'],
           'tanggal_pesanan' => ['required']
       ]);

       $pesanan = PesananModel::findorfail($id);
       $pesanan_data = [
           'id_destinasi' => $request->id_destinasi,
           'kode_pesanan' => $request->kode_pesanan,
           'tanggal_pesanan' => $request->tanggal_pesanan,

           ];

       $pesanan->update($pesanan_data);
       return redirect('admin/pesanan')->with('success','Data pesanan anda berhasil di Update');
   }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pesanan = PesananModel::find($id);
        $pesanan->delete();
        return redirect('admin/pesanan')->with('danger', 'data berhasil dihapus');
}
}

