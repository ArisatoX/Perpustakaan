@extends('layouts.template')

@section('content')

    <h1 style="text-align: center;"> Pustakawan </h1>
    <br>

    <div>
        <a href="/pustakawan/create" class="btn btn-success" style="margin-left: 500px; margin-bottom: 50px;"> Tambah Staff </a>
    </div>

    <div id="wrapper" style="display: flex;">

        <div id="left" style="flex: 0 0 10%;">
            @if(count($pustakawans) > 0)
                <div class="list-group">
                    <li class="list-group-item" style="font-size:20px;"> ID </h4>    
                </div>

                @foreach($pustakawans as $pustakawan)
                    <div class="list-group">    
                        <li class="list-group-item" style="font-size:20px;"> {{$pustakawan->ID_staff}}</h4>
                    </div>
                @endforeach
            @else
                <p> Empty! </p>
            @endif

        </div>

        <div id="right" style="flex: 1;">
            @if(count($pustakawans) > 0)
                <div class="list-group">
                    <li class="list-group-item" style="font-size:20px;"> Nama Pustakawan </h4>    
                </div>

                @foreach($pustakawans as $pustakawan)
                    <div class="list-group">
                           
                        <li class="list-group-item" style="font-size:20px;"><a href="/pustakawan/{{$pustakawan->ID_staff}}"> {{$pustakawan->nama_staff}} </a></h4>
                    </div>
                @endforeach
            @else
                <p> Empty! </p>
            @endif 
        </div>

    </div>
    
    <div class="container" style="padding: 50px; margin-left:400px;">
        {{$pustakawans->links()}}
    </div>

@endsection