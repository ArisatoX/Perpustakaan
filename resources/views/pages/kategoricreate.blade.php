@extends('layouts.template')

@section('content')
<h1> Create Kategori </h1>

    {{Form::open(['action' => 'KategoriController@store', 'method' => 'POST'])}}

        <div class="form-group">
            {{Form::label('nama_kategori','Nama : ' )}}
            {{Form::text('nama_kategori', '')}}
        </div> 
        
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

    {{Form::close()}}

@endsection