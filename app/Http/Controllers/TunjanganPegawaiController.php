<?php

namespace App\Http\Controllers;

use Request;
use App\TunjanganPegawaiModel;
use App\TunjanganModel;
use App\PegawaiModel;
use App\User;

class TunjanganPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tunjanganpegawais = TunjanganPegawaiModel::all();
        $tunjangans = TunjanganModel::all();
        $users = User::all();
        return view('tunjanganpegawai.index', compact('tunjanganpegawais', 'tunjangans', 'users'));
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
        $tunjangans = TunjanganModel::all();
        $tunjanganpegawais = TunjanganPegawaiModel::all();
        return view('tunjanganpegawai.create', compact('users', 'pegawais', 'tunjangans', 'tunjanganpegawais'));
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
        $tunjanganpegawais = Request::all();
        TunjanganPegawaiModel::create($tunjanganpegawais);
        return redirect('TunjanganPegawai');
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
        $tunjanganpegawais = TunjanganPegawaiModel::find($id);
        $tunjangans = TunjanganModel::all();
        $pegawais = PegawaiModel::all();
        $users = User::all();
        return view('tunjanganpegawai.edit', compact('tunjanganpegawais', 'tunjangans', 'pegawais', 'users'));
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
        $tunjanganpegawaiUpdate = Request::all();
        $tunjanganpegawais = TunjanganPegawaiModel::find($id);
        $tunjanganpegawais->update($tunjanganpegawaiUpdate);
        return redirect('TunjanganPegawai');
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
        TunjanganPegawaiModel::find($id)->delete();
        return redirect('TunjanganPegawai');
    }
}
