@extends('layouts.template')

@section('content')

    <a href="/buku" class="btn btn-primary">Back</a>
    
    <div class="container" style="margin-top: 50px;">
        
        <h2>{{$buku->nama_buku}}</h2>
        <p>
        Kategori&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{$buku->ID_kategori}}<br>
        Penulis&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{$buku->penulis}}<br>
        Penerbit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{$buku->penerbit}}<br>
        Tahun terbit&nbsp;&nbsp;&nbsp;:&nbsp;{{$buku->tahun_terbit}}<br>
        Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$buku->stock}}
        </p>

    </div>
    <hr>
    
    <a href="/buku/{{$buku->ID_buku}}/edit" class="btn btn-success"> Edit </a>

    <p></p>

    {!!Form::open(['action' => ['BukuController@destroy', $buku->ID_buku], 'method' => 'POST'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection