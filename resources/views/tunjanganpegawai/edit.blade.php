@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
                <div class="panel-heading"><h2><b><center> Edit Data Tunjangan Pegawai </center></b></h2></div>

                <div class="panel-body">
                    {!! Form::model($tunjanganpegawais,['method'=>'PATCH','route'=>['TunjanganPegawai.update',$tunjanganpegawais->id]])!!}

                    <div class="form-group">
                            <label for="kode_tunjangan_id" class="form-group">Kode Tunjangan</label>
                            <div class="form-group">
                                <select name="kode_tunjangan_id" class="form-control">
                                    @foreach($tunjangans as $baru)
                                        <option value="{{$baru->id}}">{{$baru->kode_tunjangan}}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="pegawai_id" class="form-group">Nama Pegawai</label>
                            <div class="form-group">
                                <select name="pegawai_id" class="form-control">
                                    @foreach($pegawais as $baru)
                                        <option value="{{$baru->id}}">{{$baru->User->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            {!! Form::submit('Update Data',['class'=>'btn btn-success form-control'])!!}
                        </div>
                    {!! Form::close()!!}
                </div>
            </div>
</div>
@endsection
