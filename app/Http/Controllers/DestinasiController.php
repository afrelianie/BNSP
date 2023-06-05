<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinasi;
use Illuminate\Support\Facades\DB;

class DestinasiController extends Controller
{
    
    public function index()
    {
        //
        $data['data_destinasi'] = Destinasi::all();
        return view('admin.destinasi.index', $data);
    }

    public function create()
    {
        return view ('admin.destinasi.create');
    }


    public function store(Request $request)
    {
        // dd(request()->all());
        $request->validate([
            'nama_destinasi' => ['required'],
            'keunggulan' => ['required'],
            'alamat_destinasi' => ['required'],
            'harga' => ['required'],
            'sejarah' => ['required'],
            'foto_destinasi' => ['required']
        ]);
        $image = $request->foto_destinasi;
        $new_image = time() . $image->getClientOriginalName();
        $destinasi = Destinasi::create([
            'nama_destinasi' => $request->nama_destinasi,
            'keunggulan' => $request->keunggulan,
            'alamat_destinasi' => $request->alamat_destinasi,
            'harga' => $request->harga,
            'sejarah' => $request->sejarah,
            'foto_destinasi' => 'foto/' . $new_image,
        ]);
        $image->move('foto/', $new_image);
        return redirect('admin/destinasi')->with('success', 'Berhasil Ditambahkan');
    }

    public function show(string $id)
    {
        $data['destinasi'] = Destinasi::findOrfail($id);
        return view('admin.destinasi.show', $data);
    }

   public function edit(string $id)
    {
        $data['destinasi'] = Destinasi::findOrfail($id);
        return view('admin.destinasi.edit', $data);

    }

    public function update(Request $request, string $id)
    {
         
        $destinasi = Destinasi::findorfail($id);
        if ($request->has('foto_destinasi')) {
            if ($destinasi->image <> "") {
                unlink(public_path('/') . '/' . $destinasi->image);
                }
            $image = $request->foto_destinasi;
            $new_image = time().$image->getClientOriginalName();
            $image->move('foto/', $new_image);
            $destinasi_data = [
                'nama_destinasi' => $request->nama_destinasi,
                'keunggulan' => $request->keunggulan,
                'alamat_destinasi' => $request->alamat_destinasi,
                'harga' => $request->harga,
                'sejarah' => $request->sejarah,
                'foto_destinasi' => 'foto/' . $new_image,
            ];
        }

        //jika tidak mengubah gambar maka data yang disimpan adalah ini.
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




    public function destroy($id)
    {
        $destinasi = DestinasiModel::find($id);
        $destinasi->delete();
        return redirect('admin/destinasi')->with('danger', 'data berhasil dihapus');
    }
}