@extends('layouts.template')

@section('content')
<h1> Edit Kategori </h1>

    {{Form::open(['action' => ['KategoriController@update', $kategori->ID_kategori], 'method' => 'POST'])}}

        <div class="form-group">
            {{Form::label('nama_kategori','Nama : ' )}}
            {{Form::text('nama_kategori', '')}}
        </div>
         
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

    {{Form::close()}}

@endsection