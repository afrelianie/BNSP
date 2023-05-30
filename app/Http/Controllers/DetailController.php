<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\DetailModel;
use App\Models\PesananModel;
use App\Models\Destinasi;
use Illuminate\Support\Str;
use Carbon\Carbon;

use Iluminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class DetailController extends Controller
{

    public function index()
    {
        $data['list_data'] = DetailModel::all();
        return view('admin.detail_pesanan.index', $data);
    }

    public function create()
    {
        return view('admin.detail_pesanan.create');
    }

    public function store(Request $request)
    {
        // dd(request()->all());
        $request->validate([
            'id_pesanan' => ['required'],
            'id_destinasi' => ['required'],
            'harga' => ['required'],
            'gambar' => ['required']
        ]);
        $image = $request->gambar;
        $new_image = time() . $image->getClientOriginalName();
        $detail = DetailModel::create([
            'id_category' => $request->id_category,
            'id_kecamatan' => $request->id_kecamatan,
            'harga' => $request->harga,
            'gambar' => 'uploads/' . $new_image,
        ]);
        $image->move('uploads/', $new_image);
        return redirect('admin/detail_pesanan')->with('success', 'Berhasil Ditambahkan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
