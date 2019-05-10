@extends('layouts.template')

@section('content')
<h1> Create Anggota </h1>

    {{Form::open(['action' => 'AnggotaController@store', 'method' => 'POST'])}}

        <div class="form-group">
            {{Form::label('nama_anggota','Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ' )}}
            {{Form::text('nama_anggota', '')}}
        </div> 
        
        <div class="form-group">
            {{Form::label('jenis_kel','Jenis Kelamin : ' )}}
            
            {{Form::text('jenis_kel', '')}}
        </div>

        <div class="form-group">
            {{Form::label('alamat','Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ' )}}
            {{Form::text('alamat', '')}}
        </div>

        <div class="form-group">
            {{Form::label('no_telp','No Telp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ' )}}
            {{Form::text('no_telp', '')}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

    {{Form::close()}}

@endsection