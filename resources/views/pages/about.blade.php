@extends('app')
@section('title','About-us | '.config('app.name'))

@section('content')
        <p>Built with Laravel 8 &hearts; by Yves and Humbert</p>
        <p><a href="{{route('app_home')}}">Revenir a la page d'acceuil</a></p>
@endsection
