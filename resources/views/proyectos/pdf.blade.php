@extends('layout/template')

@section('title', 'Gobierno | Proyectos')

@section('contenido')

<html>
<head>
    <meta charset="UTF-8">
<title>Prueba de PHP</title>
</head>
<body>
<?php echo '<p style="text-align:center" ><b>Gobierno de El Salvador</b></p>'; ?>
<?php echo '<p style="text-align:center"><b>Caja Mutual del Ministerio de Educación</b></p>'; ?>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Fuente</th>
            <th>Monto Planificado</th>
            <th>Monto patrocinado</th>
            <th>Montos Propios</th>
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
            </tr> 
        @endforeach 
        <br>  
        <br>  
        <?php echo '<p>by: William Acevedo</p>'; ?>
    </tbody>


    
</table>
</body>
</html>