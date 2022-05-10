@extends('app')
@section('title',' Hello city')

@section('content')
<img src="{{asset('/images/flag_of_togo.svg')}}" alt="drapeau togolais"/>
        <h1>Hello from Togo</h1>
        <p>Il est actuellement {{date('h:i A')}}</p>
@endsection