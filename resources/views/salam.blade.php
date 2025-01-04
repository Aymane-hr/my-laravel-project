@extends('layouts.master')
@section('title')
    Home
@endsection

@section('main')
<h3>Salam Alikum {{ $nom }}</h3>
@if(count($languages)>0) {{-- // unless =! if  tnkhdemoha f k wa7d  @unless(count($languages)<0) --}}
<h4>Cours : </h4>
<ul>
    @foreach ($languages as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>
@else
    Pass de cours pour l'instant.
@endif

{{--isset--}}
@isset($nom)
    Yes nom is set {{$nom}}
@endisset

<br/> {{--empty--}}
@empty($prenom)
    No prenom is empty or null 
@endempty

<br/>Color {{--switch--}}
@switch($color)
    @case('red')
        Rouge
        @break
    @case('black')
        Noir
        @break
    @default
        
@endswitch
@endsection