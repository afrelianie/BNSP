<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinasi;
use App\Models\PesananModel;
use App\Models\Testimoni;
use App\Models\User;
class AdminController extends Controller
{
   
    public function index()
    {
        $destinasi = Destinasi::count();
        $pesanan = PesananModel::count();
        $testimoni = Testimoni::count();
        $user = User::count();
        return view('admin.home',compact('destinasi','pesanan','testimoni','user'));
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
