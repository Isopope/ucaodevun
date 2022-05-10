@extends('app')
@section('title',' Hello city')

@section('content')
<img src="{{asset('/images/flag_of_togo.svg')}}" alt="drapeau togolais" class="mt-12 rounded shadow-md h-32" />
        <h1 class="mt-5  text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Togo</h1>
        <p class="text-lg text-gray-800">Il est actuellement {{date('h:i A')}}</p>
@endsection