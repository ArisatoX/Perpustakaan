@extends('layouts.template')

@section('content')
<h1> Create Peminjaman </h1>

    {{Form::open(['action' => 'PeminjamanController@store', 'method' => 'POST'])}}

        <div class="form-group">
            {{Form::label('ID_buku','ID Buku &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ' )}}
            {{Form::text('ID_buku', '')}}
        </div> 
        
        <div class="form-group">
            {{Form::label('ID_anggota','ID Anggota &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ' )}}
            
            {{Form::text('ID_anggota', '')}}
        </div>

        <div class="form-group">
            {{Form::label('ID_staff','ID Staff &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ' )}}
            {{Form::text('ID_staff', '')}}
        </div>

        <div class="form-group">
            {{Form::label('tgl_pinjam','Tanggal Pinjam : ' )}}
            {{Form::text('tgl_pinjam', '')}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

    {{Form::close()}}

@endsection