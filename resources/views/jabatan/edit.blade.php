@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
                <div class="panel-heading"><h2><b><center> Edit Data Jabatan </center></b></h2></div>

                <div class="panel-body">
                    {!! Form::model($jabatans,['method'=>'PATCH','route'=>['Jabatan.update',$jabatans->id]])!!} <div class="form-group">
                        {!! Form::label('Kode Jabatan','Kode Jabatan')!!}
                        {!! Form::text('kode_jabatan',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Nama Jabatan','Nama Jabatan')!!}
                        {!! Form::text('nama_jabatan',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Besaran Uang','Besaran Uang')!!}
                        {!! Form::text('besaran_uang',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Update Data',['class'=>'btn btn-success form-control'])!!}
                    </div>
                    {!! Form::close()!!}
                </div>
            </div>
</div>
@endsection
