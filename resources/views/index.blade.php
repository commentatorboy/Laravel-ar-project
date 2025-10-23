@extends('layout')

@section('content')


<div>
    @foreach ($ARObjects as $arobject)
        <li>
            {{$arobject->id}}
            <a href="/ARObject/{{$arobject->uid}}">{{$arobject->title}}</a>
        </li>


    @endforeach
</div>




@endsection
