@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
                <div class="panel-heading"><h2><b><center> Edit Data Lembur Pegawai </center></b></h2></div>

                <div class="panel-body">
                {!! Form::model($lembur_pegawais,['method'=>'PATCH','route'=>['LemburPegawai.update',$lembur_pegawais->id]])!!}
                    
                    <div class="form-group">
                            <label for="kode_lembur_id" class="form-group">Kode Lembur</label>
                            <div class="form-group">
                                <select name="kode_lembur_id" class="form-control">
                                    @foreach($kategori_lemburs as $baru)
                                        <option value="{{$baru->id}}">{{$baru->kode_lembur}}</option>
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
                        {!! Form::label('Jumlah Jam','Jumlah Jam')!!}
                        {!! Form::text('jumlah_jam',null,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Update Data',['class'=>'btn btn-success form-control'])!!}
                    </div>
                    {!! Form::close()!!}
                </div>
    </div>
</div>
@endsection
