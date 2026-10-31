<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Sampel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class SampelController extends Controller
{
    public function index()
    {
        $data = Sampel::all();
        $jumlah = $data->count();
        $jumlah_jenis = $data->count('jenis');
        return view('Sampel.index', compact('data', 'jumlah'));
    }
    public function cetakPDF()
    {
        $data = Sampel::all();
        $pdf = Pdf::loadView('Sampel.pdf', ['data' => $data]);
        return $pdf->stream('invoice.pdf');
    }
    public function formTambah()
    {
        return view('Sampel.formTambah');
    }
    public function simpanData(Request $request)
    {
        $nama = $request->nama;
        $bn = $request->bn;
        $tanggal = $request->tanggal;
        $jenis = $request->jenis;


        $data = new Sampel();
        $data->nama = $nama;
        $data->bn = $bn;
        $data->tanggal = $tanggal;
        $data->jenis = $jenis;
        $data->save();

        return redirect('Sampel')->with('status', 'Data Berhasil Disimpan');
    }

    public function formEdit($id)
    {
        $data = Sampel::find($id);
        return view('Sampel.formEdit', compact('data'));
    }
    public function updateData(Request $request)
    {
        $id = $request->id;
        $nama = $request->nama;
        $bn = $request->bn;
        $tanggal = $request->tanggal;
        $jenis = $request->jenis;

        $data = Sampel::find($id);
        $data->nama = $nama;
        $data->bn = $bn;
        $data->tanggal = $tanggal;
        $data->jenis = $jenis;
        $data->update();

        return redirect('Sampel')->with('status', 'Data Berhasil Diupdate');
    }

    public function hapusData(Request $request)
    {
        $id = $request->id;
        $data = Sampel::find($id);
        $data->delete();
        return redirect('Sampel')->with('status', 'Data Berhasil Dihapus');
    }
}
