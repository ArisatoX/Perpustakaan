@extends('layouts.template')

@section('content')

    <a href="/pustakawan" class="btn btn-primary">Back</a>
    
    <div class="container" style="margin-top: 50px;">
        
        <h2>{{$pustakawan->nama_staff}}</h2>
        <p>
        Jenis Kelamin&nbsp;&nbsp; : &nbsp;{{$pustakawan->jenis_kel}}<br>
        Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;{{$pustakawan->alamat}}<br>
        Tanggal lahir&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;{{$pustakawan->tgl_lahir}}<br>
        Nomor Telepon : &nbsp;{{$pustakawan->no_telp}}
        </p>

    </div>

    <a href="/pustakawan/{{$pustakawan->ID_staff}}/banyakpelayanan" class="btn btn-info"> Banyak Pelayanan </a>

    <hr>
    
    <a href="/pustakawan/{{$pustakawan->ID_staff}}/edit" class="btn btn-success"> Edit </a>

    <p></p>

    {!!Form::open(['action' => ['PustakawanController@destroy', $pustakawan->ID_staff], 'method' => 'POST'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection