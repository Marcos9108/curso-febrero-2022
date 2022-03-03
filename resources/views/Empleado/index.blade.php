@extends('layouts.layout')
@section('content')
    @php
    $nueva_variable = 'hola';
    @endphp
<div class="row">
    <section class="content">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div><h3>Lista Empleados</h3></div>

                    <div class="pull-right">
                        <div class="btn-group">
                            <a href="{{route('empleado.create')}}" class="btn btn-success">Añadir empleado</a>
                        </div>
                    </div>

                    <div class="table-container">
                        <table id="tablaEmpleados" class="table table-bordered table-striped">
                            <thead>
                                <th>Nombre</th>
                                <th>Edad</th>
                                <th>Puesto</th>
                                <th>Activo</th>
                                <th>Salario</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>

                            @if($empleados->count())
                                @foreach($empleados as $empleado)
                                    <tr>
                                        <td>{{$empleado->nombre}}</td>
                                        <td>{{$empleado->edad}}</td>
                                        <td>{{$empleado->puesto}}</td>
                                        <td>{{$empleado->activo}}</td>
                                        <td>{{$empleado->salario}}</td>
                                        <td>{{$nueva_variable}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6">No hay registros</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection