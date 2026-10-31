<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::all();
        $jumlah = $data->count();
        return view('Produk.index', compact('data', 'jumlah'));
    }
    public function cetakPDF()
    {
        $data = Produk::all();
        $pdf = Pdf::loadView('Produk.pdf', ['data' => $data]);
        return $pdf->stream('invoice.pdf');
    }

    public function formTambah()
    {
        return view('produk.formTambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function simpanData(Request $request)
    {
        $nama_produk = $request->nama_produk;
        $kode_produk = $request->kode_produk;



        $data = new Produk();
        $data->nama_produk = $nama_produk;
        $data->kode_produk = $kode_produk;
        $data->save();

        return redirect('Produk')->with('status', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Produk $produk)
    // {
    //     return view('produk.show', compact('produk'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function formEdit($id)
    {
        $data = Produk::find($id);
        return view('Produk.formEdit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateProduk(Request $request)
    {
        $id = $request->id;
        $nama_produk = $request->nama_produk;
        $kode_produk = $request->kode_produk;


        $data = Produk::find($id);
        $data->nama_produk = $nama_produk;
        $data->kode_produk = $kode_produk;
        $data->update();

        return redirect('Produk')->with('status', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapusProduk(Request $request)
    {
        $id = $request->id;
        $data = Produk::find($id);
        $data->delete();
        return redirect('Produk')->with('status', 'Data Berhasil Dihapus');
    }
}
