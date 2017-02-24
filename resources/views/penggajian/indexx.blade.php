@extends('layouts.apps')

@section('content')
<div id="page-inner"> 
    <div class="row">
        <div class="col-md-12">
            <h2>Data Gaji Pegawai</h2>   
            <h5>Welcome, Love to see you back. </h5>
                <hr />
                <div class="panel-body">
                    <a href="{{url('/gajian/create')}}" class="btn btn-primary">Tambah Penggajian</a>
                    <hr>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr class="bg-info">
                          <th><center>No.</center></th>
                          <th><center>Pegawai</center></th>
                          <th><center>Jumlah Jam Lembur</center></th>
                          <th><center>Jumlah Uang Lembur</center></th>
                          <th><center>Gaji Pokok</center></th>
                          <th><center>Total Gaji</center></th>
                          <th><center>Tanggal Pengambilan</center></th>
                          <th><center>Status Pengambilan</center></th>
                          <th><center>Petugas Penerima</center></th>
                          <th><center>Photo</center></th>
                          <th colspan="3"><center>Tindakan</center></th>
                        </tr>
                      </thead>
                        <tbody>
                            @php
                            $no=1;
                            @endphp
                            @foreach ($gaji as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->tunjangan_pegawai->pegawai->user->name}}</td>
                                    <td>{{$data->jumlah_jam_lembur}} </td>
                                    <td><?php echo 'Rp. '.number_format( $data->jumlah_uang_lembur, 2,",","." ); ?></td>
                                    <td><?php echo 'Rp. '.number_format( $data->gaji_pokok, 2,",","." ); ?></td>
                                    <td><?php echo 'Rp. '.number_format( $data->total_gaji, 2,",","." ); ?></td>
                                    <td>{{$data->updated_at}} </td>
                                    <td>
                                    <?php
                                        if ($data->status_pengambilan == '0') {
                                            echo "Belum Diambil";
                                        }

                                        elseif ($data->status_pengambilan == '1') {
                                            echo "Sudah Diambil";
                                        }
                                    ?></td>

                                    <td><?php echo "Keuangan"; ?> </td>
                                    <td>
                                        <center>
                                            <img src="{{asset('img/'.$data->photo.'')}}" width="75" height="75" class="img-rounded img-responsive" alt="Responsive image">
                                        </center>
                                    </td>
                                    {!! Form::close() !!}
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
