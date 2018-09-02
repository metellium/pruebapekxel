
@extends('layouts.app')
@section('content')

<table class="table table-striped">
        <thead>            
            <th>id De Formulario</th>
            <th>Tipo de ciclismo</th>
            <th>Años usando Bicicleta</th>
            <th>Horas a la semana</th>
            <th>Marcas favoritas</th> 
            <th>Acción</th>        
        </thead>
        <tbody>         
        @foreach($formulario as $resumen)                    
                <tr>               
                    <td>{{$resumen->id}}</td>
                    <td>{{$resumen->tipo_ciclismo}}</td>
                    <td>{{$resumen->anios}} Años</td>
                    <td>{{$resumen->horas}} Horas</td>                                        
                    <td>{{$resumen->marcas}}</td> 
                    <td><a href="{{route('formulario.edit',$resumen->id) }}"class="btn btn-warning">Editar</a></td>                                        
                    <td><a href="{{route('admin.formulario.destroy',$resumen->id) }}" onclick="return confirm('Seguro que deseas elimiarlo?')"class="btn btn-danger">Eliminar</a></td>                   
                </tr>    
                @endforeach        
        </tbody>
    </table>
    <a href="{{route('formulario.index') }}"class="btn btn-success">Regresar</a>
    <a href="/"class="btn btn-success">Llenar nuevo formulario</a>
    @endsection