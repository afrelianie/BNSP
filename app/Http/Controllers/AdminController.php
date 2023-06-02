<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinasi;
use App\Models\PesananModel;
use App\Models\Testimoni;
use App\Models\Pembayaran;
use DB;
use App\Models\User;
class AdminController extends Controller
{
   
    public function index()
    {
        $destinasi = Destinasi::count();
        $pesanan = PesananModel::count();
        $testimoni = Testimoni::count();
        $pembayaran = Pembayaran::count();
        $user = User::count();
        $ar_destinasi = DB::table('destinasi')->select('nama_destinasi', 'id')->get();
        $ar_pembayaran = DB::table('pembayaran')
        ->selectRaw('total_pembayaran ,count(total_pembayaran) as jumlah')
        ->groupBy('total_pembayaran')
        ->get();
        return view('admin.home',compact('destinasi','pesanan','testimoni','pembayaran','user','ar_destinasi','ar_pembayaran'));
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
