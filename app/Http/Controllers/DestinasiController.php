<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinasi;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DestinasiImport;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;



class DestinasiController extends Controller
{
    
    public function index()
    {
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
        ],[
            'nama_destinasi.required' => 'Nama destinasi wajib disii',
            'keunggulan.required' => 'Keunggulan Wajib disii',
            'alamat_destinasi.required' => 'Alamat wajib diisi',
            'harga.required' => 'Harga wajib diisi',
            'sejarah.required' => 'Sejarah wajib diisi',
            'foto_destinasi.required' => 'Foto wajib diisi', 
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
            if ($destinasi->foto_destinasi <> "") {
                unlink(public_path('/') . '/' . $destinasi->foto_destinasi);
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
        $destinasi = Destinasi::find($id);

        //hapus gambar di public
        if ($destinasi->foto_destinasi <> "") {
            unlink(public_path('/') . '/' . $destinasi->foto_destinasi);
        }
        foreach($destinasi->pesanan as $pesanan){
            $pesanan->delete();
        }
        $destinasi->delete();
        return redirect('admin/destinasi')->with('danger', 'data berhasil dihapus');
    }

    public function __invoke(Request $request){
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');
        $nama_file = rand().$file->getClientOriginalName();
        $file->move('file_excel', $nama_file);
        Excel::import(new DestinasiImport, public_path('file_excel/'.$nama_file));
        return redirect('admin/destinasi')->with('success', 'data berhasil dihapus');
    }


    // public function __invoke(Request $request)
    // {
    //     $this->validate($request, [
    //         'file' => 'required|mimes:csv,xls,xlsx'
    //     ]);
    //     $file = $request->file('file');

    //     // membuat nama file unik
    //     $nama_file = $file->hashName();

    //     //temporary file
    //     $path = $file->storeAs('file_excel', $nama_file);
    //     // import data
    //     $filepath = public_path('file_excel' . $nama_file);
    //     $import = Excel::import(new DestinasiImport(), $filepath);

    //     //remove from server
    //     Storage::delete($path);

    //     if ($import) {
    //         //redirect
    //         return redirect('admin/destinasi')->with(['success' => 'Data Berhasil Diimport!']);
    //     }
    // }

}