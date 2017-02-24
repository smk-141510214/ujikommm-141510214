<?php

namespace App\Http\Controllers;

use Request;
use App\PegawaiModel;
use App\TunjanganPegawaiModel;
use App\TunjanganModel;
use App\KategoriLemburModel;
use App\LemburPegawaiModel;
use App\JabatanModel;
use App\GolonganModel;
use App\PenggajianModel;
use Input;
use Auth;

class PenggajianController extends Controller
{
    public function index()
    {
        $gaji = PenggajianModel::paginate(3);
        return view('Penggajian.indexx',compact('gaji'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $penggajian = TunjanganPegawaiModel::all();
        return view('Penggajian.create',compact('penggajian')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $penggajian=Input::all();
      $tunjangan_pegawai=TunjanganPegawaiModel::where('id',$penggajian['tunjangan_pegawai_id'])->first();
      $Penggajiann=PenggajianModel::where('tunjangan_pegawai_id',$tunjangan_pegawai->id)->first();
      $tunjangan=TunjanganModel::where('id',$tunjangan_pegawai->kode_tunjangan_id)->first();
      $pegawai=PegawaiModel::where('id',$tunjangan_pegawai->pegawai_id)->first();
      $kategori_lembur=KategoriLemburModel::where('jabatan_id',$pegawai->jabatan_id)->where('golongan_id',$pegawai->golongan_id)->first();
      $lembur_pegawai=LemburPegawaiModel::where('pegawai_id',$pegawai->id)->first();
      $jabatan=JabatanModel::where('id',$pegawai->jabatan_id)->first();
      $golongan=GolonganModel::where('id',$pegawai->golongan_id)->first();

      $penggajian = new PenggajianModel ;

      if (isset($Penggajiann)) {
        $error=true ;
        $tunjangan=TunjanganPegawaiModel::paginate(10);
        return view('Penggajian.create',compact('tunjangan','error'));
      }

      elseif (!isset($lembur_pegawai)) 
      {
        $nol = 0;
        $penggajian->jumlah_jam_lembur= $nol;
        $penggajian->jumlah_uang_lembur = $nol;
        $penggajian->gaji_pokok=$jabatan->besaran_uang+$golongan->besaran_uang;
        $penggajian->total_gaji=($tunjangan->jumlah_anak*$tunjangan->besaran_uang) + ($jabatan->besaran_uang+$golongan->besaran_uang);
        $penggajian->tanggal_pengambilan = date('d-m-y');
        $penggajian->status_pengambilan = Input::get('status_pengambilan');
        $penggajian->tunjangan_pegawai_id = Input::get('tunjangan_pegawai_id');
        $penggajian->petugas_penerima = Auth::user()->name;
        $penggajian->save();
      }
      elseif(!isset($lembur_pegawai) || !isset($kategori_lembur))
      {
        $nol = 0;
        $penggajian->jumlah_jam_lembur= $nol;
        $penggajian->jumlah_uang_lembur = $nol;
        $penggajian->gaji_pokok=$jabatan->besaran_uang+$golongan->besaran_uang;
        $penggajian->total_gaji = ($tunjangan->jumlah_anak*$tunjangan->besaran_uang) + ($jabatan->besaran_uang+$golongan->besaran_uang);
        $penggajian->tanggal_pengambilan = date('d-m-y');
        $penggajian->status_pengambilan = Input::get('status_pengambilan');
        $penggajian->tunjangan_pegawai_id = Input::get('tunjangan_pegawai_id');
        $penggajian->petugas_penerima = Auth::user()->name;
        $penggajian->save();
      }
      else
      {
        $penggajian->jumlah_jam_lembur=$lembur_pegawai->jumlah_jam;
        $penggajian->jumlah_uang_lembur =($lembur_pegawai->jumlah_jam)*($kategori_lembur->besaran_uang);
        $penggajian->gaji_pokok=$jabatan->besaran_uang+$golongan->besaran_uang;
        $penggajian->total_gaji = ($lembur_pegawai->jumlah_jam*$kategori_lembur->besaran_uang)+($tunjangan->jumlah_anak*$tunjangan->besaran_uang)+($jabatan->besaran_uang+$golongan->besaran_uang);
        $penggajian->tanggal_pengambilan = date('d-m-y');
        $penggajian->status_pengambilan = Input::get('status_pengambilan');
        $penggajian->tunjangan_pegawai_id = Input::get('tunjangan_pegawai_id');
        $penggajian->petugas_penerima = Auth::user()->name;
        $penggajian->save();
      }
      return redirect('gajian');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
