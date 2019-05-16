@extends('layouts.template')

@section('content')

    <a href="/peminjaman" class="btn btn-danger">Back</a>
    
    <div class="container" style="margin-top: 50px;">
        
        <h2>{{$peminjaman->ID_pinjam}}</h2>
        <p>
        ID Anggota&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{$peminjaman->ID_anggota}}<br>
        ID Staff&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{$peminjaman->ID_staff}}<br>
        ID Buku&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{$peminjaman->ID_buku}}<br>
        Tanggal Pinjam&nbsp;&nbsp;&nbsp;:&nbsp;{{$peminjaman->tgl_pinjam}}<br>
        Batas Kembali&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{$peminjaman->batas_kembali}}<br>
        Tanggal Kembali&nbsp;:&nbsp;{{$peminjaman->tgl_kembali}}
        </p>

    </div>

    <a href="/peminjaman/{{$peminjaman->ID_pinjam}}/kembali" class="btn btn-success"> Pengembalian </a>

    <hr>
    
    <a href="/peminjaman/{{$peminjaman->ID_pinjam}}/edit" class="btn btn-primary"> Edit </a>

    <p></p>

    {!!Form::open(['action' => ['PeminjamanController@destroy', $peminjaman->ID_pinjam], 'method' => 'POST'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection