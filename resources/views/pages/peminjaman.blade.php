@extends('layouts.template')

@section('content')

    <h1 style="text-align: center;"> Peminjaman </h1>
    <br>

    <div>
        <a href="/peminjaman/create" class="btn btn-success" style="margin-left: 390px; margin-bottom: 50px;"> Tambah Peminjaman </a>
        <a href="/peminjaman/pinjamhariini" class="btn btn-primary" style="margin-bottom: 50px;"> Peminjaman Hari Ini </a>
    </div>

    <div id="wrapper" style="display: flex;">

        <div id="left" style="flex: 0 0 10%;">
            @if(count($peminjamans) > 0)
                <div class="list-group">
                    <li class="list-group-item" style="font-size:20px;"> ID </h4>    
                </div>

                @foreach($peminjamans as $peminjaman)
                    <div class="list-group">    
                        <li class="list-group-item" style="font-size:20px;"><a href="/peminjaman/{{$peminjaman->ID_pinjam}}"> {{$peminjaman->ID_pinjam}}</a></h4>
                    </div>
                @endforeach
            @else
                <p> Empty! </p>
            @endif

        </div>

        <div id="right" style="flex: 0 0 30%;">
            @if(count($peminjamans) > 0)
                <div class="list-group">
                    <li class="list-group-item" style="font-size:20px;"> ID Anggota </h4>    
                </div>

                @foreach($peminjamans as $peminjaman)
                    <div class="list-group">
                           
                        <li class="list-group-item" style="font-size:20px;">{{$peminjaman->ID_anggota}} </a></h4>
                    </div>
                @endforeach
            @else
                <p> Empty! </p>
            @endif 
        </div>

        <div id="right" style="flex: 0 0 30%;">
            @if(count($peminjamans) > 0)
                <div class="list-group">
                    <li class="list-group-item" style="font-size:20px;"> ID Staff </h4>    
                </div>

                @foreach($peminjamans as $peminjaman)
                    <div class="list-group">
                           
                        <li class="list-group-item" style="font-size:20px;">{{$peminjaman->ID_staff}} </a></h4>
                    </div>
                @endforeach
            @else
                <p> Empty! </p>
            @endif 
        </div>

        <div id="right" style="flex: 0 0 30%;">
            @if(count($peminjamans) > 0)
                <div class="list-group">
                    <li class="list-group-item" style="font-size:20px;"> ID Buku </h4>    
                </div>

                @foreach($peminjamans as $peminjaman)
                    <div class="list-group">
                           
                        <li class="list-group-item" style="font-size:20px;">{{$peminjaman->ID_buku}} </a></h4>
                    </div>
                @endforeach
            @else
                <p> Empty! </p>
            @endif 
        </div>

    </div>
    
    <div class="container" style="padding: 50px; margin-left:400px;">
        {{$peminjamans->links()}}
    </div>

@endsection