@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row">
                <div class="panel-heading"><center><h2><b>Tambah</b></h2></center></div>

                <div class="panel-body">
                {!! Form::open(['url'=>'Golongan'])!!}
                    <!--<div class="form-group">
                        {!! Form::label('Kode Golongan','Kode Golongan')!!}
                        {!! Form::text('kode_golongan',null,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Nama Golongan','Nama Golongan')!!}
                        {!! Form::text('nama_golongan',null,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Besaran Uang','Besaran Uang')!!}
                        {!! Form::text('besaran_uang',null,['class'=>'form-control','required'])!!}
                    </div>-->
                    
                    <div class="form-group{{ $errors->has('kode_golongan') ? ' has-error' : '' }}">
                        <label for="kode_golongan" class="col-md-4 control-label">Kode golongan</label>
                        <div class="col-md-6">
                            <input id="kode_golongan" type="kode_golongan" class="form-control" placeholder="PLease Enter Keyword" name="kode_golongan" value="{{ old('kode_golongan') }}" required autofocus>

                            @if ($errors->has('kode_golongan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('kode_golongan') }}</strong>
                                </span>
                             @endif
                        </div>
                    </div>
                    <br>

                    <div class="form-group{{ $errors->has('nama_golongan') ? ' has-error' : '' }}">
                        <label for="nama_golongan" class="col-md-4 control-label">Nama golongan</label>
                        <div class="col-md-6">
                            <input id="nama_golongan" type="nama_golongan" class="form-control" placeholder="PLease Enter Keyword" name="nama_golongan" value="{{ old('nama_golongan') }}" required autofocus>

                            @if ($errors->has('nama_golongan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nama_golongan') }}</strong>
                                </span>
                             @endif
                        </div>
                    </div>
                    <br>
                    <div class="form-group{{ $errors->has('besaran_uang') ? ' has-error' : '' }}">
                        <label for="besaran_uang" class="col-md-4 control-label">Besaran Uang</label>
                        <div class="col-md-6">
                            <input id="besaran_uang" type="besaran_uang" class="form-control" placeholder="PLease Enter Keyword"name="besaran_uang" value="{{ old('besaran_uang') }}" required autofocus>

                            @if ($errors->has('besaran_uang'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('besaran_uang') }}</strong>
                                </span>
                             @endif
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                    Save
                            </button>
                        </div>
                    </div>
                </div>
    </div>
</div>
@endsection
