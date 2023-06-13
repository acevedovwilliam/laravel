@extends('layout/template')

@section('title', 'Crear | Proyectos')

@section('contenido')

<main>

    <div class="container py-4">
        <h2>Registrar proyecto</h2>

        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" 
            aria-label="Close"></button>
          </div>
        
        @endif

    <form action="{{ url('proyectos')}}" method="post">

        @csrf

        <table width="80%" border="0">
            <tr> 
				<td><b>Nombre</b></td>
				<td><input type="text" class="form-control" name="nombre" required></td> 
			</tr>
            <tr> 
				<td><b>Fuente</b></td>
				<td><input type="text" class="form-control" name="fuente" required></td>
			</tr>
            <tr> 
				<td><b>Monto Planificado</b></td>
				<td><input type= "number" class="form-control" name="mplanificado" required></td>
			</tr>
            <tr> 
				<td><b>Monto Patrocinado</b></td>
				<td><input type= "number" class="form-control" name="mpatrocinado" required></td>
			</tr>
            <tr> 
				<td><b>Monto  Fondos Propios</b></td>
				<td><input type="number" class="form-control" name="mpropio" required></td>
			</tr>
        </table>    
         <a href="{{ url('proyectos')}}" class ="btn btn-primary">Regresar</a>  
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
    </div>
</main>