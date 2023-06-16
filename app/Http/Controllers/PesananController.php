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

    
    public function create()
    {
        // dd($this->getNomorPesanan());
        $pesan['destinasi'] = Destinasi::all();
        $pesan['pesanan'] = PesananModel::all();
        return view('admin.pesanan.create', $pesan);

        
    }


    public function store(Request $request)
    {
        // dd(request()->all());
        //    input kode otomatis
        $status = "Proses";
        $kode1 = "PS";
        $kode2 = date("ymd");
        $kode3 = rand(100,999);
        $kode = "$kode1-$kode2-$kode3";

        $request->validate([
            'id_destinasi' => ['required'],
            'tanggal_pesanan' => ['required']
    
        ],[
            'id_destinasi.required' => 'Destinasi wajib diisi',
            'tanggal_pesanan.required' => 'Tanggal pesanan wajib diisi', 
        ]);
        $pesanan = PesananModel::create([
            'id_destinasi' => $request->id_destinasi,
            'kode_pesanan' => $kode,
            'status' => $status,
            'tanggal_pesanan' => $request->tanggal_pesanan,

        ]);

        return redirect('admin/pesanan')->with('success', 'Berhasil Ditambahkan');
    }

    
    public function show(string $id)
    {
        $destinasi = Destinasi::all();
        $pesanan = PesananModel::findOrfail($id);
        return view('admin.pesanan.show', compact('pesanan', 'destinasi'));
    }

   
    public function edit(string $id)
    {
        $destinasi = Destinasi::all();
        $pesanan = PesananModel::findOrfail($id);
        return view('admin.pesanan.edit', compact('pesanan', 'destinasi'));
    }

    
    public function update(Request $request, string $id)
    {
        $kode1 = "PS";
        $kode2 = date("ymd");
        $kode3 = rand(100,999);
        $kode = "$kode1-$kode2-$kode3";

        $request->validate([
           'id_destinasi' => ['required'],
           'tanggal_pesanan' => ['required']
       ]);

       $pesanan = PesananModel::findorfail($id);
       $pesanan_data = [
           'id_destinasi' => $request->id_destinasi,
           'kode_pesanan' => $kode,
           'tanggal_pesanan' => $request->tanggal_pesanan,

           ];

       $pesanan->update($pesanan_data);
       return redirect('admin/pesanan')->with('success','Data pesanan anda berhasil di Update');
   }


   
    public function destroy(string $id)
    {
        $pesanan = PesananModel::find($id);
        $pesanan->delete();
        return redirect('admin/pesanan')->with('danger', 'data berhasil dihapus');
    }


    public function getNomorPesanan(){
        $kode1 = "PS";
        $kode2 = date("ymd");
        $kode3 = rand(100,999);
        $kode = "$kode1-$kode2-$kode3";
        return $kode;
    }









    

    public function print(string $id)
    {
        $destinasi = Destinasi::all();
        $pesanan = PesananModel::findOrfail($id);
        return view('admin.pesanan.print', compact('pesanan', 'destinasi'));
    }


    public function bayar(Request $request)
    {
        // dd($request->all());
        PesananModel::where('id', $request->delete)->delete();
        // $image = $request->bukti_bayar;
        // $new_image = time() . $image->getClientOriginalName();
        PesananModel::create([
            'id' => $request->id,
            'kode_pesanan' => $request->kode_pesanan,
            'status' => $request->status,
            'id_destinasi' => $request->id_destinasi,
            'tanggal_pesanan' => $request->tanggal_pesanan,
            // 'bukti_bayar' => 'upload/' . $new_image,
        ]);
        // $image->move('upload/', $new_image);
        return redirect('admin/pesanan')->with('success', 'Boking Tempat Wisata Sudah Dibayar');
    }

    public function tolak(Request $request)
    {
        // dd($request->all());
        PesananModel::where('id', $request->delete)->delete();
        PesananModel::create([
            'id' => $request->id,
            'kode_pesanan' => $request->kode_pesanan,
            'status' => $request->status,
            'id_destinasi' => $request->id_destinasi,
            'tanggal_pesanan' => $request->tanggal_pesanan,
        ]);
        return redirect('admin/pesanan')->with('success', 'Data Berhasil Ditolak');
    }

}

