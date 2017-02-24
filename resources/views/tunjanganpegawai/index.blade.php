@extends('layouts.apps')

@section('content')
<div id="page-inner"> 
    <div class="row">
        <div class="col-md-12">
            <h2>Tunjangan Pegawai</h2>   
            <h5>Welcome, Love to see you back. </h5>
                <hr />
                <div class="panel-body">
                    <a href="{{url('/TunjanganPegawai/create')}}" class="btn btn-primary">Tambah</a>
                    <hr>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr class="bg-info">
                                <td><center><b>No</b></center></td>
                                <td><center><b>Kode Tunjangan</b></center></td>
                                <td><center><b>NIP</b></center></td>
                                <td><center><b>Nama Pegawai</b></center></td>
                                <td><center><b>Jabatan</b></center></td>
                                <td><center><b>Golongan</b></center></td>
                                <td><center><b>Jumlah Anak</b></center></td>
                                <td><center><b>Besaran Uang</b></center></td>
                                <td colspan="2"><center><b>Action</b></center></td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($tunjanganpegawais as $baru)
                                <tr>
                                    <td>{{ $i++}}</td>
                                    <td>{{ $baru->tunjangan->kode_tunjangan }}</td>
                                    <td><center>{{ $baru->pegawai->nip }}</center></td>
                                    <td><center>{{ $baru->pegawai->User->name }}</center></td>
                                    <td><center>{{ $baru->pegawai->Jabatan->nama_jabatan }}</center></td>
                                    <td><center>{{ $baru->pegawai->Golongan->nama_golongan }}</center></td>
                                    <td><center>{{ $baru->Tunjangan->jumlah_anak}}</center></td>

                                    <td><center>
                                        <?php
                                        if ( $baru->Tunjangan->jumlah_anak < '1' )
                                        {
                                            echo "Rp. ".number_format($baru->Tunjangan->besaran_uang, 2,",",".");
                                        }      

                                        elseif ( $baru->Tunjangan->jumlah_anak == '1' || $baru->Tunjangan->jumlah_anak == '2')
                                        {
                                            echo "Rp. ".number_format($baru->Tunjangan->besaran_uang * $baru->Tunjangan->jumlah_anak, 2,",",".");
                                        }

                                        elseif ( $baru->Tunjangan->jumlah_anak > '2')
                                        {
                                            echo "Rp. ".number_format($baru->Tunjangan->besaran_uang * '2', 2,",",".");
                                        } 

                                        ?>
                                    </center></td>


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