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
    
    public function create(string $id)
    {
        $www = $id;
        // dd($this->getNomorPesanan());
        $pesanan = PesananModel::all();
        $destinasi = Destinasi::all();
        $user = User::all();
        return view('pelanggan.pesanan.create',  compact('pesanan','www','user','destinasi'));   
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
            'qty' => ['required', 'integer', 'min:1'], 
            'tanggal_pesanan' => ['required']
    
        ],[
            'id_destinasi.required' => 'Destinasi wajib diisi',
            'qty.required' => 'Jumlah wajib diisi',
            'qty.integer' => 'Jumlah harus berupa angka',
            'qty.min' => 'Jumlah minimal 1',
            'tanggal_pesanan.required' => 'Tanggal pesanan wajib diisi', 
        ]);

        // Ambil destinasi berdasarkan id_destinasi yang diberikan
        $destination = Destinasi::findOrFail($request->id_destinasi);
        // Hitung total harga berdasarkan kuantitas dan harga destinasi
        $total_harga = $request->qty * $destination->harga;

        $pesanan = PesananModel::create([
            'id_user' => $userId,
            'id_destinasi' => $request->id_destinasi,
            'kode_pesanan' => $kode,
            'status' => $status,
            'qty' => $request->qty,
            'total_harga' => $total_harga,
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

         // Ambil destinasi berdasarkan id_destinasi yang diberikan
         $destination = Destinasi::findOrFail($request->id_destinasi);
         // Hitung total harga berdasarkan kuantitas dan harga destinasi
         $total_harga = $request->qty * $destination->harga;
 
        $pesanan = PesananModel::create([
            'id' => $request->id,
            'id_user' => $userId,
            'kode_pesanan' => $request->kode_pesanan,
            'status' => $request->status,
            'id_destinasi' => $request->id_destinasi,
            'tanggal_pesanan' => $request->tanggal_pesanan,
            'qty' => $request->qty,
            'total_harga' => $total_harga,
            'bukti_bayar' => 'upload/' . $new_image,
        ]);
        return redirect('pelanggan/pesanan')->with('success', 'Berhasil Dibayar, Silakan Tunggu Verifikasi Admin');

    }

    public function cancel(Request $request)
    {
        // dd($request->all());
        $userId = Auth::id();
        
         // Ambil destinasi berdasarkan id_destinasi yang diberikan
         $destination = Destinasi::findOrFail($request->id_destinasi);
         // Hitung total harga berdasarkan kuantitas dan harga destinasi
         $total_harga = $request->qty * $destination->harga;
 
        PesananModel::where('id', $request->delete)->delete();
        PesananModel::create([
            'id' => $request->id,
            'id_user' => $userId,
            'kode_pesanan' => $request->kode_pesanan,
            'status' => $request->status,
            'id_destinasi' => $request->id_destinasi,
            'qty' => $request->qty,
            'total_harga' => $total_harga,
            'tanggal_pesanan' => $request->tanggal_pesanan,
        ]);
        return redirect('pelanggan/pesanan')->with('danger', 'Pesanan Berhasil Batalkan');
    }

}
