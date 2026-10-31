<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Validation\Rules\Unique;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();
        return view('user.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function formTambah()
    {
        return view('user.formTambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function simpanData(Request $request)
    {
        $name = $request->name;
        $level = $request->level;
        $email = $request->email;
        $password = bcrypt($request->password);



        $data = new User();
        $data->name = $name;
        $data->level = $level;
        $data->email = $email;
        $data->password = $password;
        $data->save();

        return redirect('User')->with('status', 'Data Berhasil Disimpan');
    }



    public function updateUser(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $level = $request->level;
        $email = $request->email;
        $password = bcrypt($request->password);



        $data = User::find($id);
        $data->name = $name;
        $data->level = $level;
        $data->email = $email;
        $data->password = $password;
        $data->update();

        return redirect('User')->with('status', 'Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapusData(Request $request)
    {
        $id = $request->id;
        $data = User::find($id);
        $data->delete();
        return redirect('User')->with('status', 'Data Berhasil Dihapus');
    }
}