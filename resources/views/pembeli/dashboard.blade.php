@extends('layouts.app')

@section('title', 'Dashboard Pembeli')

@section('content')
    <h1>Dashboard Pembeli</h1>
    <p>Selamat datang, {{ auth()->user()->name }}.</p>
@endsection
