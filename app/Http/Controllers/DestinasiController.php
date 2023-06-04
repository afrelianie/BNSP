<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinasi;
use Iluminate\Support\Facades\DB;

class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['data_destinasi'] = Destinasi::all();
        return view('admin.destinasi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('admin.destinasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(request()->all());
        $request->validate([
            'nama_destinasi' => ['required'],
            'foto_destinasi' => ['required'],
            'alamat_destinasi' => ['required'],
            'harga' => ['required'],
            'sejarah' => ['required'],
            'keunggulan' => ['required'],
        ]);
        $image = $request->foto_destinasi;
        $new_image = time() . $image->getClientOriginalName();
        $destinasi = Destinasi::create([
            'nama_destinasi' => $request->nama_destinasi,
            'alamat_destinasi' => $request->alamat_destinasi,
            'harga' => $request->harga,
            'foto_destinasi' => 'foto/' . $new_image,
            'sejarah' => $request->sejarah,
            'keunggulan' => $request->keunggulan,
        ]);
        $image->move('foto/', $new_image);
        return redirect('admin/destinasi')->with('success', 'Berhasil Ditambahkan');

        
    }

    /**
     * Display the specified resource.
     */
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
    public function destroy($id)
    {
        //
        DB::table('pesanan')->where('id', $id)->delete();
        return redirect('admin/pesanan')->with('danger', 'data berhasil dihapus');
    }
}
