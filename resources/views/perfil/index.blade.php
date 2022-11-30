@extends('dashboard')

@section('contenido')
    <h1>Hola mundo: {{auth()->user()->username}}</h1>
@endsection