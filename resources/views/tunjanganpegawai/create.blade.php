@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row">
                <div class="panel-heading"><center><h2><b>Tambah</b></h2></center></div>

                <div class="panel-body">
                    {!! Form::open(['url'=>'TunjanganPegawai'])!!}

                    <div class="form-group">
                        <label for="kode_tunjangan_id" class="col-md-4 control-label">Kode Tunjangan</label>
                        <div class="col-md-6">
                           <select name="kode_tunjangan_id" class="form-control">
                                @foreach($tunjangans as $baru)
                                    <option value="{{$baru->id}}">{{$baru->kode_tunjangan}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pegawai_id" class="col-md-4 control-label">Nama Pegawai</label>
                        <div class="col-md-6">
                           <select name="pegawai_id" class="form-control">
                                @foreach($pegawais as $baru)
                                    <option value="{{$baru->id}}">{{$baru->User->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
    </div>
</div>
@endsection
