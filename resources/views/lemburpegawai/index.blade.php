@extends('layouts.apps')

@section('content')
<div id="page-inner"> 
    <div class="row">
        <div class="col-md-12">
            <h2>Lembur Pegawai</h2>   
            <h5>Welcome Jhon Deo , Love to see you back. </h5>
                <hr />
                <div class="panel-body">
                    <a href="{{url('/LemburPegawai/create')}}" class="btn btn-primary">Tambah</a>
                    <hr>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr class="bg-info">
                                <td><center><b>No</b></center></td>
                                <td><center><b>Kode Lembur</b></center></td>
                                <td><center><b>Nama Pegawai</b></center></td>
                                <td><center><b>Jabatan</b></center></td>
                                <td><center><b>Golongan</b></center></td>
                                <td><center><b>Jumlah Jam Lembur</b></center></td>
                                <td colspan="2"><center><b>Action</b></center></td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($lembur_pegawais as $baru)
                                <tr>
                                    <td><center>{{ $i++}}</center></td>
                                    <td><center>{{ $baru->kategori_lembur->kode_lembur }}</center></td>
                                    <td><center>{{ $baru->pegawai->User->name }}</center></td>
                                    <td><center>{{ $baru->pegawai->jabatan->nama_jabatan }}</center></td>
                                    <td><center>{{ $baru->pegawai->golongan->nama_golongan }}</center></td>
                                    <td><center>{{ $baru->jumlah_jam }} Jam</center></td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
</div>
</div>
@endsection
