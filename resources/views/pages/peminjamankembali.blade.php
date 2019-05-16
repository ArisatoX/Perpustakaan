@extends('layouts.template')

@section('content')
<h1> Pengembalian Peminjaman </h1>

    {{Form::open(['action' => ['PeminjamanController@updatekembali', $peminjaman->ID_pinjam], 'method' => 'POST'])}}

        <div class="form-group">
            {{Form::label('tgl_kembali','Tanggal kembali : ' )}}
            {{Form::text('tgl_kembali', '')}}
        </div> 
        
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}


    {{Form::close()}}

@endsection