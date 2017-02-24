@extends('layouts.apps')

@section('content')
<div id="page-inner"> 
    <div class="row">
        <div class="col-md-12">
            <h2>Tunjangan</h2>   
            <h5>Welcome, Love to see you back. </h5>
                <hr />
                <div class="panel-body">
                    <a href="{{url('/Tunjangan/create')}}" class="btn btn-primary">Tambah</a>
                    <hr>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr class="bg-info">
                                <td><center><b>No</b></center></td>
                                <td><center><b>Kode Tunjangan</b></center></td>
                                <td><center><b>Nama Jabatan</b></center></td>
                                <td><center><b>Nama Golongan</b></center></td>
                                <td><center><b>Status</b></center></td>
                                <td><center><b>Jumlah Anak</b></center></td>
                                <td><center><b>Besaran Uang</b></center></td>
                                <td colspan="2"><center><b>Action</b></center></td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($tunjangans as $baru)
                                <tr>
                                    <td><center>{{ $i++}}</center></td>
                                    <td><center>{{ $baru->kode_tunjangan }}</center></td>
                                    <td><center>{{ $baru->jabatan->nama_jabatan }}</center></td>
                                    <td><center>{{ $baru->golongan->nama_golongan }}</center></td>
                                    <td><center>
                                        <?php
                                        if ( $baru->status == "2" )
                                        {             
                                            echo "Menikah";
                                        }      
                                        elseif ( $baru->status =="3")
                                        {
                                            echo "Belum Menikah";         
                                        } 
                                        ?>
                                    </center></td>
                                    <td><center>{{ $baru->jumlah_anak }}</center></td>
                                    <td><?php echo 'Rp. '.number_format( $baru->besaran_uang, 2,",","." ); ?></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
    </div>
</div>
</div>
@endsection
