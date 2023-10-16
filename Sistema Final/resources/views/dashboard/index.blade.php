@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Panel de control administrador</h1>
@stop

@section('content')
    <p>Este es un sistema basico de manejo de clientes, incluye el nombre y el ruc</p>
    <a href="clientes">Ver clientes</a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop