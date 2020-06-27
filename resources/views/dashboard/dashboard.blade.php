@extends('dashboard.master')
@section('header')
<div class="breadcrumb">
    <h1>Dashboard</h1>
    <ul>
        <li><a href="">Pages</a></li>
        <li>Blank</li>
    </ul>
</div>
@stop
@section('content')
    <h1>bienvenido</h1>
    <p>usuario autentificado es {{ auth()->user()->name }}</p>
    {{$tags}}
@stop