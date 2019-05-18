@extends('layouts.template')

@section('content')

    <h1 style="text-align: center;"> Kategori </h1>
    <br>

    <div>
        <a href="/kategori/create" class="btn btn-success" style="margin-left: 490px; margin-bottom: 50px;"> Tambah Kategori </a>
       
    </div>

    <div id="wrapper" style="display: flex;">

        <div id="left" style="flex: 0 0 10%;">
            @if(count($kategoris) > 0)
                <div class="list-group">
                    <li class="list-group-item" style="font-size:20px;"> ID </h4>    
                </div>

                @foreach($kategoris as $kategori)
                    <div class="list-group">    
                        <li class="list-group-item" style="font-size:20px;"> {{$kategori->ID_kategori}}</h4>
                    </div>
                @endforeach
            @else
                <p> Empty! </p>
            @endif

        </div>

        <div id="right" style="flex: 1;">
            @if(count($kategoris) > 0)
                <div class="list-group">
                    <li class="list-group-item" style="font-size:20px;"> Nama Kategori </h4>    
                </div>

                @foreach($kategoris as $kategori)
                    <div class="list-group">
                           
                        <li class="list-group-item" style="font-size:20px;"><a href="/kategori/{{$kategori->ID_kategori}}"> {{$kategori->nama_kategori}} </a></h4>
                    </div>
                @endforeach
            @else
                <p> Empty! </p>
            @endif 
        </div>

    </div>
    
    <div class="container" style="padding: 50px; margin-left:400px;">
        {{$kategoris->links()}}
    </div>

@endsection