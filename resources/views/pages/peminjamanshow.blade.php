@extends('layouts.template')

@section('content')

    <a href="/peminjaman" class="btn btn-primary">Back</a>
    
    <div class="container" style="margin-top: 50px;">
        
        <h2>{{$peminjaman->ID_pinjam}}</h2>
        <p>
        ID Anggota&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{$peminjaman->ID_anggota}}<br>
        ID Staff&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{$peminjaman->ID_staff}}<br>
        ID Buku&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{$peminjaman->ID_buku}}<br>
        Tanggal Pinjam&nbsp;:&nbsp;{{$peminjaman->tgl_pinjam}}<br>
        </p>

    </div>
    <hr>
    
    <a href="/peminjaman/{{$peminjaman->ID_pinjam}}/edit" class="btn btn-success"> Edit </a>

    <p></p>

    {!!Form::open(['action' => ['PeminjamanController@destroy', $peminjaman->ID_pinjam], 'method' => 'POST'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection