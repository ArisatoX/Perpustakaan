@extends('layouts.template')

@section('content')
<h1> Edit Buku </h1>

{{Form::open(['action' => ['BukuController@update', $buku->ID_buku], 'method' => 'POST'])}}

        <div class="form-group">
            {{Form::label('nama_buku','Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ' )}}
            {{Form::text('nama_buku', $buku->nama_buku)}}
        </div> 
        
        <div class="form-group">
            {{Form::label('ID_kategori','ID_kategori : ' )}}
            
            {{Form::text('ID_kategori', $buku->ID_kategori)}}
        </div>

        <div class="form-group">
            {{Form::label('penulis','Penulis &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ' )}}
            {{Form::text('penulis', $buku->penulis)}}
        </div>

        <div class="form-group">
            {{Form::label('penerbit','Penerbit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ' )}}
            {{Form::text('penerbit', $buku->penerbit)}}
        </div>

        <div class="form-group">
            {{Form::label('tahun_terbit','Tahun terbit : ' )}}
            {{Form::text('tahun_terbit', $buku->tahun_terbit)}}
        </div>

        <div class="form-group">
            {{Form::label('stock','Stock &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ' )}}
            {{Form::text('stock', $buku->stock)}}
        </div>

        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

    {{Form::close()}}

@endsection