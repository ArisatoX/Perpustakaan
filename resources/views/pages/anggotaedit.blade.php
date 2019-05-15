@extends('layouts.template')

@section('content')
<h1> Edit Anggota </h1>

    {{Form::open(['action' => ['AnggotaController@update', $anggota->ID_anggota], 'method' => 'POST'])}}

        <div class="form-group">
            {{Form::label('nama_anggota','Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ' )}}
            {{Form::text('nama_anggota', $anggota->nama_anggota)}}
        </div> 
        
        <div class="form-group">
            {{Form::label('jenis_kel','Jenis Kelamin : ' )}}
            
            {{Form::text('jenis_kel', $anggota->jenis_kel)}}
        </div>

        <div class="form-group">
            {{Form::label('alamat','Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ' )}}
            {{Form::text('alamat', $anggota->alamat)}}
        </div>

        <div class="form-group">
            {{Form::label('no_telp','No Telp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ' )}}
            {{Form::text('no_telp', $anggota->no_telp)}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

    {{Form::close()}}

@endsection