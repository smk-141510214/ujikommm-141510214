<?php

namespace App\Http\Controllers;

use Request;
use App\KategoriLemburModel;
use App\JabatanModel;
use App\GolonganModel;

class KategoryLemburController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategori_lemburs = KategoriLemburModel::all();
        $jabatans = JabatanModel::all();
        $golongans = GolonganModel::all();
        return view('kategorilembur.index', compact('kategori_lemburs', 'jabatans', 'golongans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jabatans = JabatanModel::all();
        $golongans = GolonganModel::all();
        return view('kategorilembur.create', compact('jabatans', 'golongans'));
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
        $kategori_lemburs = Request::all();
        KategoriLemburModel::create($kategori_lemburs);
        return redirect('KategoriLembur');
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
        $kategori_lemburs = KategoriLemburModel::find($id);
        $jabatans = JabatanModel::all();
        $golongans = GolonganModel::all();
        return view('kategorilembur.edit', compact('kategori_lemburs', 'jabatans', 'golongans'));
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
        $kategoriUpdate = Request::all();
        $kategori_lemburs = KategoriLemburModel::find($id);
        $kategori_lemburs->update($kategoriUpdate);
        return redirect('KategoriLembur');
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
        KategoriLemburModel::find($id)->delete();
        return redirect('KategoriLembur');
    }
}
