@extends('layouts.template')

@section('content')
<h1> Create Peminjaman </h1>

    {{Form::open(['action' => ['PeminjamanController@update', $peminjaman->ID_pinjam], 'method' => 'POST'])}}

        <div class="form-group">
            {{Form::label('ID_buku','ID Buku &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ' )}}
            {{Form::text('ID_buku', $peminjaman->ID_buku)}}
        </div> 
        
        <div class="form-group">
            {{Form::label('ID_anggota','ID Anggota &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ' )}}
            
            {{Form::text('ID_anggota', $peminjaman->ID_anggota)}}
        </div>

        <div class="form-group">
            {{Form::label('ID_staff','ID Staff &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ' )}}
            {{Form::text('ID_staff', $peminjaman->ID_staff)}}
        </div>

        <div class="form-group">
            {{Form::label('tgl_pinjam','Tanggal Pinjam : ' )}}
            {{Form::text('tgl_pinjam', $peminjaman->tgl_pinjam)}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

    {{Form::close()}}

@endsection