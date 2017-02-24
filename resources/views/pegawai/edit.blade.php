@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
                <div class="panel-heading"><h2><b><center> Edit Data Pegawai </center></b></h2></div>

                <div class="panel-body">
                    {!! Form::model($pegawais,['method'=>'PATCH','route'=>['Pegawai.update',$pegawais->id],'files'=>'true'])!!}
                        <label>NIP</label>
                        <input type="text" name="nip" value="{{$pegawais->nip}}" class="form-control"><br>

                        <div class="form-group">
                            <label for="jabatan_id" class="form-group">Nama Jabatan</label>
                            <div class="form-group">
                                <select name="jabatan_id" class="form-control">
                                    @foreach($jabatans as $baru)
                                        <option value="{{$baru->id}}">{{$baru->nama_jabatan}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="golongan_id" class="form-group">Nama Golongan</label>
                            <div class="form-group">
                                <select name="golongan_id" class="form-control">
                                    @foreach($golongans as $baru)
                                        <option value="{{$baru->id}}">{{$baru->nama_golongan}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="photo" class="form-group">Photo</label>
                            <img src="{{asset('img/'.$pegawais->photo.'')}}" width="250" height="250" class="img-circle img-responsive" alt="Mountain View">                                <input type="file" name="photo" class="form-control" nullable>
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Update Data',['class'=>'btn btn-success form-control'])!!}
                        </div>
                    {!! Form::close()!!}
                </div>
            </div>
</div>
@endsection
