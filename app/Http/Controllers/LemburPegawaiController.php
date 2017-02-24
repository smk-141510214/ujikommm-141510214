<?php

namespace App\Http\Controllers;

use Request;
use App\LemburPegawaiModel;
use App\KategoriLemburModel;
use App\PegawaiModel;
use App\User;

class LemburPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lembur_pegawais = LemburPegawaiModel::all();
        $kategori_lemburs = KategoriLemburModel::all();
        $users = User::all();
        return view('lemburpegawai.index', compact('lembur_pegawais', 'kategori_lemburs', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::all();
        $pegawais = PegawaiModel::all();
        $lembur_pegawais = LemburPegawaiModel::all();
        $kategori_lemburs = KategoriLemburModel::all();
        return view('lemburpegawai.create', compact('users', 'pegawais', 'lembur_pegawais', 'kategori_lemburs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $lembur_pegawais = Request::all();
        LemburPegawaiModel::create($lembur_pegawais);
        return redirect('LemburPegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kategori_lemburs = KategoriLemburModel::all();
        $lembur_pegawais = LemburPegawaiModel::find($id);
        $pegawais = PegawaiModel::all();
        $users = User::all();
        return view('lemburpegawai.edit', compact('kategori_lemburs', 'lembur_pegawais', 'pegawais', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $lemburpegawaiUpdate = Request::all();
        $lembur_pegawais = LemburPegawaiModel::find($id);
        $lembur_pegawais->update($lemburpegawaiUpdate);
        return redirect('LemburPegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        LemburPegawaiModel::find($id)->delete();
        return redirect('LemburPegawai');
    }
}
