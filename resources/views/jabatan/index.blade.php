@extends('layouts.apps')

@section('content')
<div id="page-inner"> 
    <div class="row">
        <div class="col-md-12">
            <h2>Jabatan</h2>   
            <h5>Welcome Jhon Deo , Love to see you back. </h5>
                <hr />
                <div class="panel-body">
                    <a href="{{url('/Jabatan/create')}}" class="btn btn-primary">Tambah</a>
                    <hr>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr class="bg-info">
                                <td><center><b>No</b></center></td>
                                <td><center><b>Kode Jabatan</b></center></td>
                                <td><center><b>Nama Jabatan</b></center></td>
                                <td><center><b>Besaran Uang</b></center></td>
                                <td colspan="2"><center><b>Action</b></center></td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($jabatans as $baru)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $baru->kode_jabatan }}</td>
                                    <td>{{ $baru->nama_jabatan }}</td>
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
