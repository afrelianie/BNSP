<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PesananController;
use App\Models\PesananModel;
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
     
    }
}
