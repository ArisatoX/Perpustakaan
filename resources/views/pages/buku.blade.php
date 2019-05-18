@extends('layouts.template')

@section('content')

    <h1 style="text-align: center;"> Buku </h1>
    <br>

    <div>
        <a href="/buku/create" class="btn btn-success" style="margin-left: 280px; margin-bottom: 50px;"> Tambah Buku </a>
        <a href="/buku/belumkembali" class="btn btn-warning" style=" margin-bottom: 50px;"> Belum Kembali </a>
        <a href="/buku/hitungbukutelat" class="btn btn-danger" style=" margin-bottom: 50px;"> Belum Kembali dan Terlambat </a>
        <a href="/buku/stockkosong" class="btn btn-info" style=" margin-bottom: 50px;"> Stock Kosong </a>
    </div>

    <div id="wrapper" style="display: flex;">

        <div id="left" style="flex: 0 0 10%;">
            @if(count($bukus) > 0)
                <div class="list-group">
                    <li class="list-group-item" style="font-size:20px;"> ID </h4>    
                </div>

                @foreach($bukus as $buku)
                    <div class="list-group">    
                        <li class="list-group-item" style="font-size:20px;"> {{$buku->ID_buku}}</h4>
                    </div>
                @endforeach
            @else
                <p> Empty! </p>
            @endif

        </div>

        <div id="right" style="flex: 1;">
            @if(count($bukus) > 0)
                <div class="list-group">
                    <li class="list-group-item" style="font-size:20px;"> Nama Buku </h4>    
                </div>

                @foreach($bukus as $buku)
                    <div class="list-group">
                           
                        <li class="list-group-item" style="font-size:20px;"><a href="/buku/{{$buku->ID_buku}}"> {{$buku->nama_buku}} </a></h4>
                    </div>
                @endforeach
            @else
                <p> Empty! </p>
            @endif 
        </div>

    </div>
    
    <div class="container" style="padding: 50px; margin-left:400px;">
        {{$bukus->links()}}
    </div>

@endsection