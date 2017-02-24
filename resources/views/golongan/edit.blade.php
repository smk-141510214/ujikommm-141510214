@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
                <div class="panel-heading"><h2><b><center> Edit Data Golongan </center></b></h2></div>

                <div class="panel-body">
                    {!! Form::model($golongans,['method'=>'PATCH','route'=>['Golongan.update',$golongans->id]])!!}
                    <div class="form-group">
                        {!! Form::label('Kode Golongan','Kode Golongan')!!}
                        {!! Form::text('kode_golongan',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Nama Golongan','Nama Golongan')!!}
                        {!! Form::text('nama_golongan',null,['class'=>'form-control'])!!}
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
