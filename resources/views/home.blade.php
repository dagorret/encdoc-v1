@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Escritorio</div>

                <div class="panel-body">
                    Usted se encuentra registrado, {{ Auth::user()->name }}!!
                </div>
                <div class="bg-primary">
                    Menú
                </div>
                <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
                    <a href="{{ route('iaenc') }}" class="btn btn-default" role="button">Encuesta A</a>
                    <a href="{{ route('ibenc') }}" class="btn btn-default" role="button">Encuesta B</a>
                    <a href="{{ route('icenc') }}" class="btn btn-default" role="button">Encuesta C </a>
                    <a href="{{ route('searchusers') }}" class="btn btn-default" role="button">Buscar Docente</a>
                </div>
                <hr>
                <div class="bg-primary">
                    Aclaraciones
                </div>
                <div class="bg-info">
                    <p><strong>Encuesta A:</strong>Auto Informe Docente</p>
                    <p><strong>Encuesta B:</strong>Informe del Docente Responsable sobre Desempeño de Integrantes del Equipo de Cátedra</p>
                    <p><strong>Encuesta C:</strong>Encuesta a los integrantes del equipo de cátedra sobre desempeño del Docente Responsable </p>
                </div>
            </div>
            <div>
                @if (Auth::user()->admin)
                <div class="bg-primary">
                    Menú Administrador
                </div>
                <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
                    <a href="#" class="btn btn-default" role="button">&#160;</a>
                    <a href="#" class="btn btn-default" role="button">&#160;</a>
                    <a href="#" class="btn btn-default" role="button">Ver Informes</a>
                    <a href="{{ route('users.index') }}" class="btn btn-default" role="button">Listar Usuarios</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
