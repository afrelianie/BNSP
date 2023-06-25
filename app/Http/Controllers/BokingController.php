<?php

namespace App\Http\Controllers;

use App\Models\PesananModel;
use App\Models\Destinasi;
use App\Models\User;
use App\Models\Testimoni;

use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BokingController extends Controller
{

    //Pesanan dan Pembokingan Tempat
    public function index()
    {
        // Mendapatkan ID pengguna yang sedang login
        $userId = Auth::id();

        // Mengambil pesanan berdasarkan ID pengguna yang sedang login
        $data['list_data'] = PesananModel::where('id_user', $userId)->get();

        return view('pelanggan.pesanan.index', $data);
    }
    
    public function create()
    {
        // dd($this->getNomorPesanan());
        $pesan['destinasi'] = Destinasi::all();
        $pesan['pesanan'] = PesananModel::all();
        return view('pelanggan.pesanan.create', $pesan);        
    }

    public function store(Request $request)
    {
        // dd(request()->all());

        $userId = Auth::id();
        // input kode otomatis
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
            'id_user' => $userId,
            'id_destinasi' => $request->id_destinasi,
            'kode_pesanan' => $kode,
            'status' => $status,
            'tanggal_pesanan' => $request->tanggal_pesanan,

        ]);

        return redirect('pelanggan/pesanan')->with('success', 'Berhasil Ditambahkan');
    }
    

    public function show(string $id)
    {
        $destinasi = Destinasi::all();
        $user = User::all();
        $pesanan = PesananModel::findOrfail($id);
        return view('pelanggan.pesanan.show', compact('pesanan', 'destinasi','user'));
    }

    public function destroy($id)
    {

        $pesanan = PesananModel::find($id);
        if ($pesanan->bukti_bayar <> "") {
            unlink(public_path('/') . '/' . $pesanan->bukti_bayar);
        }
        foreach($pesanan->testimoni as $testimoni){
            $testimoni->delete();
        }
        $pesanan->delete();
        return redirect('pelanggan/pesanan')->with('danger', 'data berhasil dihapus');

    }


    public function print(string $id)
    {
        $destinasi = Destinasi::all();
        $pesanan = PesananModel::findOrfail($id);
        return view('pelanggan.pesanan.print', compact('pesanan', 'destinasi'));
    }


    public function lunas(Request $request)
    {
        // dd($request->all());
        $userId = Auth::id();
        PesananModel::where('id', $request->delete)->delete();
        $bukti_bayar = $request->bukti_bayar;
        $new_image = time() . $bukti_bayar->getClientOriginalName();
        $bukti_bayar->move('upload/', $new_image);
        $pesanan = PesananModel::create([
            'id' => $request->id,
            'id_user' => $userId,
            'kode_pesanan' => $request->kode_pesanan,
            'status' => $request->status,
            'id_destinasi' => $request->id_destinasi,
            'tanggal_pesanan' => $request->tanggal_pesanan,
            'bukti_bayar' => 'upload/' . $new_image,
        ]);
        return redirect('pelanggan/pesanan')->with('success', 'Berhasil Ditambahkan');





    }

    public function cancel(Request $request)
    {
        // dd($request->all());
        $userId = Auth::id();
        PesananModel::where('id', $request->delete)->delete();
        PesananModel::create([
            'id' => $request->id,
            'id_user' => $userId,
            'kode_pesanan' => $request->kode_pesanan,
            'status' => $request->status,
            'id_destinasi' => $request->id_destinasi,
            'tanggal_pesanan' => $request->tanggal_pesanan,
        ]);
        return redirect('pelanggan/pesanan')->with('success', 'Data Berhasil Ditolak');
    }

}
