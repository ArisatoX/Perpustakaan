@extends('layouts.template')

@section('content')

    <h1 style="text-align: center;"> Anggota </h1>
    <br>
    <div id="wrapper" style="display: flex;">

        <div id="left" style="flex: 0 0 10%;">
            @if(count($anggotas) > 0)
                <div class="list-group">
                    <li class="list-group-item" style="font-size:20px;"> ID </h4>    
                </div>

                @foreach($anggotas as $anggota)
                    <div class="list-group">    
                        <li class="list-group-item" style="font-size:20px;"> {{$anggota->ID_anggota}}</h4>
                    </div>
                @endforeach
            @else
                <p> Empty! </p>
            @endif

        </div>

        <div id="right" style="flex: 1;">
            @if(count($anggotas) > 0)
                <div class="list-group">
                    <li class="list-group-item" style="font-size:20px;"> Nama Anggota </h4>    
                </div>

                @foreach($anggotas as $anggota)
                    <div class="list-group">
                           
                        <li class="list-group-item" style="font-size:20px;"><a href="/anggota/{{$anggota->ID_anggota}}"> {{$anggota->nama_anggota}} </a></h4>
                    </div>
                @endforeach
            @else
                <p> Empty! </p>
            @endif 
        </div>

    </div>
    
    <div class="container" style="padding: 50px; margin-left:400px;">
        {{$anggotas->links()}}
    </div>

@endsection