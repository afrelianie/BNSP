<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinasi;
use App\Models\PesananModel;
use Illuminate\Support\Facades\DB;

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
        // $destinasi = Destinasi::all();
        // return view('admin.destinasi.show', compact('destinasi'));
        $destinasi = Destinasi::findOrfail($id);
        return view('admin.destinasi.show', compact('destinasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        // $destinasi = Destinasi::all();
        // return view('admin.destinasi.edit', compact( 'destinasi'));
        $data['destinasi'] = Destinasi::all();
        return view('admin.destinasi.edit', $data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        {
            $request->validate([
               'nama_destinasi' => ['required'],
               'keunggulan' => ['required'],
               'alamat_destinasi' => ['required'],
               'harga' => ['required'],
               'sejarah' => ['required'],
               'foto_destinasi' => ['required']
           ]);
   
           $destinasi = Destinasi::findorfail($id);
           if ($request->has('foto_destinasi')) {
               if ($destinasi->foto_destinasi <> "") {
                   unlink(public_path('/') . '/' . $destinasi->foto_destinasi);
                   }
               $image = $request->foto_destinasi;
               $new_image = time().$image->getClientOriginalName();
               $image->move('uploads/', $new_image);
               $destinasi_data = [
                   'nama_destinasi' => $request->nama_destinasi,
                   'keunggulan' => $request->keunggulan,
                   'alamat_destinasi' => $request->alamat_destinasi,
                   'harga' => $request->harga,
                   'sejarah' => $request->sejarah,
                   'foto_destinasi' => 'uploads/' . $new_image,
               ];
           }
           else{
               $destinasi_data = [
                   'nama_destinasi' => $request->nama_destinasi,
                   'keunggulan' => $request->keunggulan,
                   'alamat_destinasi' => $request->alamat_destinasi,
                   'harga' => $request->harga,
                   'sejarah' => $request->sejarah,
               ];
           }
           $destinasi->update($destinasi_data);
           return redirect('admin/destinasi')->with('success','Data Destinasi anda berhasil di Update');
       }
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
