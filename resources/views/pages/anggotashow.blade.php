@extends('layouts.template')

@section('content')

    <a href="/anggota" class="btn btn-primary">Back</a>
    
    <div class="container" style="margin-top: 50px;">
        
        <h2>{{$anggota->nama_anggota}}</h2>
        <p>
        Jenis Kelamin&nbsp;&nbsp; : &nbsp;{{$anggota->jenis_kel}}<br>
        Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;{{$anggota->alamat}}<br>
        Nomor Telepon : &nbsp;{{$anggota->no_telp}}
        </p>

    </div>
    <hr>
    
    <a href="/anggota/{{$anggota->ID_anggota}}/edit" class="btn btn-success"> Edit </a>

    <p></p>

    {!!Form::open(['action' => ['AnggotaController@destroy', $anggota->ID_anggota], 'method' => 'POST'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection