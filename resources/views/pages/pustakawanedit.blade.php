@extends('layouts.template')

@section('content')
<h1> Edit Pustakawan </h1>

    {{Form::open(['action' => ['PustakawanController@update', $pustakawan->ID_staff], 'method' => 'POST'])}}

        <div class="form-group">
            {{Form::label('nama_staff','Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ' )}}
            {{Form::text('nama_staff', $pustakawan->nama_staff)}}
        </div> 
        
        <div class="form-group">
            {{Form::label('jenis_kel','Jenis Kelamin : ' )}}
            
            {{Form::text('jenis_kel', $pustakawan->jenis_kel)}}
        </div>

        <div class="form-group">
            {{Form::label('alamat','Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ' )}}
            {{Form::text('alamat', $pustakawan->alamat)}}
        </div>

        <div class="form-group">
            {{Form::label('tgl_lahir','Tanggal lahir &nbsp;&nbsp;: ' )}}
            {{Form::text('tgl_lahir', $pustakawan->tgl_lahir)}}
        </div>

        <div class="form-group">
            {{Form::label('no_telp','No Telp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ' )}}
            {{Form::text('no_telp', $pustakawan->no_telp)}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

    {{Form::close()}}

@endsection