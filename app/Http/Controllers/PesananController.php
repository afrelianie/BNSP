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
    
        $data['data_pesanan'] = PesananModel::all();
        return view('admin.pesanan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

