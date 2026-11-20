<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Sampel;
use App\Models\User;

class BerandaController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'jumlahUser' => User::count(),
            'jumlahProduk' => Produk::count(),
            'jumlahSampel' => Sampel::count(),
            'sampelTerbaru' => Sampel::latest('tanggal')->limit(5)->get(),
        ]);
    }
}
