@extends('app')
@section('title',' Hello city')

@section('content')
        <h1>Hello from Togo</h1>
        <p>Il est actuellement {{date('h:i A')}}</p>
@endsection