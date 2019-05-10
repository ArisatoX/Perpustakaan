@extends('layouts.template')

@section('content')
<h1> Create Anggota </h1>

    {{Form::open(['action' => 'AnggotaController@store', 'method' => 'POST'])}}

        <div class="form-group">
            {{Form::label('nama_anggota','Nama : ' )}}
            {{Form::text('nama_anggota', '')}}
        </div>    

    {{Form::close()}}

@endsection