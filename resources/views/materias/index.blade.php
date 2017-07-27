@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Listado de Materias - Orden por Código
                </div>
                <div class="panel-body">

                    <table class="table">
                        <thead class="thead-inverse">
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($materias as $materia)
                            <tr data-id="{{ $materia->codigo }}">
                                <td>{{ $materia->codigo }}</td>
                                <td>{{ $materia->nombre }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $materias->render() !!}
                </div>
            </div>
        </div>
@endsection