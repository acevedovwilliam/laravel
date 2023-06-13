@extends('layout/template')

@section('title', 'Gobierno | Proyectos')

@section('contenido')

<main>
    <div class="container" py-4">
        
        <h2>LISTADO DE PROYECTOS</h2>
        
        <a href="{{ url('proyectos/create')}}" class="btn btn-primary btn-sm">Nuevo registro</a>
        <a href="{{ url('proyectos/pdf')}}" class="btn btn-primary btn-sm">Imprimir</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>nombre</th>
                    <th>fuente</th>
                    <th>mplanificado</th>
                    <th>mpatrocinado</th>
                    <th>mpropios</th>
                    <th></th>
                </tr>
            </thead>   
            <tbody>
                @foreach($proyectos as $proyecto)   
                    <tr>
                        <td> {{ $proyecto->id }}</td>
                        <td> {{ $proyecto->nombre }}</td>
                        <td> {{ $proyecto->fuente }}</td>
                        <td> {{ $proyecto->mplanificado }}</td>
                        <td> {{ $proyecto-> mpatrocinado}}</td>
                        <td> {{ $proyecto->mpropio }}</td>
                        <td> <a href="{{ url('proyectos/'.$proyecto->id.'/edit')}}" 
                            class="btn btn-warning btn-sm">Editar<a/> </td>
                        <td>
                            <form action="{{ url('proyectos/'.$proyecto->id)}}" method="POST">
                                @method("DELETE")
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>    
                        </td>        
                    </tr> 
                @endforeach   
            </tbody>


            
        </table>


    </div>

</main>
