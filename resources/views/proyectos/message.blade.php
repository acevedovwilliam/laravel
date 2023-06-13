@extends('layout/template')

@section('title', 'Crear | Proyectos')

@section('contenido')

<main>

    <div class="container py-4">
        <h2>{{ $msg }}</h2>

        <a href="{{ url('proyectos')}}" class="btn btn-primary">Regresar</a>
    </div>
</main>    