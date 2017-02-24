@extends('layouts.apps')

@section('content')
<div id="page-inner"> 
    <div class="row">
        <div class="col-md-12">
            <h2>Pegawai</h2>   
            <h5>Welcome, Love to see you back. </h5>
                <hr />
                <div class="panel-body">
                    <a href="{{url('/Pegawai/create')}}" class="btn btn-primary">Tambah</a>
                    <hr>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr class="bg-info">
                                <td><center><b>No</b></center></td>
                                <td><center><b>NIP</b></center></td>
                                <td><center><b>Nama Pegawai</b></center></td>
                                <td><center><b>Nama Jabatan</b></center></td>
                                <td><center><b>Nama Golongan</b></center></td>
                                <td><center><b>Foto</b></center></td>
                                <td colspan="3"><center><b>Action</b></center></td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($pegawais as $baru)
                                <tr>
                                    <td><center>{{$i++}}</center></td>
                                    <td><center>{{ $baru->nip }}</center></td>
                                    <td><center>{{ $baru->User->name }}</center></td>
                                    <td><center>{{ $baru->jabatan->nama_jabatan }}</center></td>
                                    <td><center>{{ $baru->golongan->nama_golongan }}</center></td>
                                    <td>
                                        <center>
                                            <img src="{{asset('img/'.$baru->photo.'')}}" width="75" height="75" class="img-rounded img-responsive" alt="Responsive image">
                                        </center>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
</div>
</div>
@endsection
