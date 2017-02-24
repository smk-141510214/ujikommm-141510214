@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
                <div class="panel-heading"><h2><b><center> Edit Data Kategori Lembur </center></b></h2></div>

                <div class="panel-body">
                {!! Form::model($kategori_lemburs,['method'=>'PATCH','route'=>['KategoriLembur.update',$kategori_lemburs->id]])!!}
                    <div class="form-group">
                        {!! Form::label('Kode Lembur','Kode Lembur')!!}
                        {!! Form::text('kode_lembur',null,['class'=>'form-control'])!!}
                    </div>

                    <label>Nama Jabatan</label>
                    <select name="jabatan_id" class="form-control" required>
                        @foreach($jabatans as $baru)
                        <option value="{{$baru->id}}">{{$baru->nama_jabatan}}</option>
                        @endforeach
                    </select><br>

                    <label>Nama Golongan</label>
                    <select name="golongan_id" class="form-control" required>
                        @foreach($golongans as $baru)
                        <option value="{{$baru->id}}">{{$baru->nama_golongan}}</option>
                        @endforeach
                    </select><br>
                    
                    <div class="form-group">
                        {!! Form::label('Besaran Uang','Besaran Uang')!!}
                        {!! Form::text('besaran_uang',null,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Update Data',['class'=>'btn btn-success form-control'])!!}
                    </div>
                    {!! Form::close()!!}
                </div>
    </div>
</div>
@endsection
