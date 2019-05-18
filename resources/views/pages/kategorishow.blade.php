@extends('layouts.template')

@section('content')

    <a href="/kategori" class="btn btn-primary">Back</a>
    
    <div class="container" style="margin-top: 50px;">
        
        <h2>{{$kategori->nama_kategori}}</h2>
        <p>
        Nama Kategori: &nbsp;{{$kategori->nama_kategori}}<br>
        </p>

    </div>

    <a href="/kategori/{{$kategori->ID_kategori}}/bukuperkategori" class="btn btn-info"> Buku per Kategori</a>

    <hr>
    
    <a href="/kategori/{{$kategori->ID_kategori}}/edit" class="btn btn-success"> Edit </a>

    <p></p>

    {!!Form::open(['action' => ['KategoriController@destroy', $kategori->ID_kategori], 'method' => 'POST'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection