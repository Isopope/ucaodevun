@extends('app')
@section('title','About-us | '.config('app.name'))

@section('content')
         <img src="{{asset('/images/télécharger.png')}}" alt="logo de l'ucao" class=" my-12 rounded-full"/>
        <h2 class=" mb-5 text-gray-700">
                Built with Laravel 8 <span class="text-pink-500">&hearts;</span> by Yves and Humbert
        </h2>
        <p><a href="{{route('app_home')}}"class="text-indigo-500" hover:text-indigo-600 underline>Revenir a la page d'acceuil</a></p>
@endsection
