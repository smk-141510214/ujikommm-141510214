@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row">
                <div class="panel-heading"><center><h2><b>Tambah</b></h2></center></div>

                <div class="panel-body">
                    @if($errors->any())
                        <div>
                            @foreach($errors->all() as $err)
                                <li><span>{{ $err }}</span></li>
                            @endforeach
                        </div>
                    @endif
                    
                    {!! Form::open(['url'=>'Jabatan'])!!}
                    <!--<div class="form-group">
                        {!! Form::label('Kode Jabatan','Kode Jabatan')!!}
                        {!! Form::text('kode_jabatan',null,['class'=>'form-control','required'])!!}
                    </div>-->

                    <div class="form-group{{ $errors->has('kode_jabatan') ? ' has-error' : '' }}">
                        <label for="kode_jabatan" class="col-md-4 control-label">Kode Jabatan</label>
                        <div class="col-md-6">
                            <input id="kode_jabatan" type="kode_jabatan" class="form-control" name="kode_jabatan" placeholder="PLease Enter Keyword" value="{{ old('kode_jabatan') }}" required autofocus>

                            @if ($errors->has('kode_jabatan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('kode_jabatan') }}</strong>
                                </span>
                             @endif
                        </div>
                    </div>

                    <!--<div class="form-group">
                        {!! Form::label('Nama Jabatan','Nama Jabatan')!!}
                        {!! Form::text('nama_jabatan',null,['class'=>'form-control','required'])!!}
                    </div>-->

                    <div class="form-group{{ $errors->has('nama_jabatan') ? ' has-error' : '' }}">
                        <label for="nama_jabatan" class="col-md-4 control-label">Nama Jabatan</label>
                        <div class="col-md-6">
                            <input id="nama_jabatan" type="nama_jabatan" class="form-control" name="nama_jabatan" placeholder="PLease Enter Keyword" value="{{ old('nama_jabatan') }}" required autofocus>

                            @if ($errors->has('nama_jabatan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nama_jabatan') }}</strong>
                                </span>
                             @endif
                        </div>
                    </div>

                    <!--<div class="form-group">
                        {!! Form::label('Besaran Uang','Besaran Uang')!!}
                        {!! Form::text('besaran_uang',null,['class'=>'form-control','required'])!!}
                    </div>-->

                    <div class="form-group{{ $errors->has('besaran_uang') ? ' has-error' : '' }}">
                        <label for="besaran_uang" class="col-md-4 control-label">Besaran Uang</label>
                        <div class="col-md-6">
                            <input id="besaran_uang" type="besaran_uang" class="form-control" name="besaran_uang" placeholder="PLease Enter Keyword" value="{{ old('besaran_uang') }}" required autofocus>

                            @if ($errors->has('besaran_uang'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('besaran_uang') }}</strong>
                                </span>
                             @endif
                        </div>
                    </div>

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
