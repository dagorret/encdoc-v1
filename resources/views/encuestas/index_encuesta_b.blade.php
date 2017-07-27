@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel panel-default">
                    <div class="panel-heading">Formmularios B</div>
                    <div class="panel-body">
                        @if(Session::has('flash_message'))
                            <div class="alert alert-success"><em> {!! session('flash_message') !!}</em></div>
                        @endif

                        <p><strong> {{ $user->name }}</strong></p>
                        <p class="help-block">Ayuda. Llene la encuesta. Grábela y luego Imprima.
                            Una vez grabada no se puede modificar. Consulte a Sec. Académica</p>
                        <div class="panel panel-default">
                            <div class="panel-heading">Nueva Encuesta</div>
                            <div class="panel-body">
                                {!! Form::open(['url' =>  route('nbenc', ['id' => Auth::user()->id]), 'method' => 'post' ])  !!}
                                <div class="form-group">
                                    {!! Form::label('year', 'Año', ['class' => 'control-label']) !!}
                                    <div class='input-group' id='year'>
                                        {!! Form::text('year', '',
                                                   ['require',
                                                    'class' => 'form-control'
                                                                             ])
                                    !!} <span class="label label-default">Ingrese el año para la cual la encuesta será creada.</span>
                                    </div>
                                    {!! Form::label('cuatrimestre', 'Cuatrimestre', ['class' => 'control-label']) !!}

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="cuatrimestre" id="primercuatrimestre" value="1" checked>
                                            Primer Cuatrimestre
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="cuatrimestre" id="segundocuatrimestre" value="2">
                                            Segundo Cuatrimestre
                                        </label>
                                    </div>

                                    {!! Form::label('Modalidad', 'Modalidad', ['class' => 'control-label']) !!}

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="modalidad" value="P" checked>
                                            Presencial
                                        </label>
                                        <label>
                                            <input type="radio" name="modalidad" value="D">
                                            Distancia
                                        </label>

                                    </div>

                                    {!! Form::label('asignatura', 'Código Asignatura', ['class' => 'control-label']) !!}
                                    <div class='input-group date' id='year'>

                                        {!! Form::text('asignatura', '',
                                                   ['require',
                                                    'class' => 'form-control'
                                                                             ])
                                    !!} <span class="label label-default">Ingrese el código de asignatura para la cual la encuesta será creada.</span>
                                        <div class="form-group">
                                            <a class="btn btn-info glyphicon glyphicon-search" href="{{ route('materias') }}" role="button"  target="_blank"> Buscar Materia </a>
                                        </div>
                                    </div>

                                    {!! Form::label('Departamento', 'Departamento', ['class' => 'control-label']) !!}
                                    <div class='input-group date' id='departamento'>
                                        {!! Form::text('departamento', '',
                                                   ['require',
                                                    'class' => 'form-control'
                                                                             ])
                                    !!} <span class="label label-default">Ingrese el departamento de la asignatura para la cual la encuesta será creada.</span>
                                    </div>

                                    {!! Form::label('docente_id', 'DNI Docente a Informar', ['class' => 'control-label']) !!}
                                    <div class='input-group date' id='year'>
                                        {!! Form::text('docente_id', '',
                                                   ['require',
                                                    'class' => 'form-control'
                                                                             ])
                                    !!} <span class="label label-default">Ingrese el DNI del docente a informar para la cual la encuesta será creada.</span>
                                    </div>
                                    <div class="form-group">
                                        <a class="btn btn-info glyphicon glyphicon-search" href="{{ route('searchusers') }}" role="button"  target="_blank"> Buscar Docente</a>
                                    </div>
                                    <button type="submit" class="btn btn-default glyphicon glyphicon-plus">Nueva
                                    </button>

                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            @foreach( $encuestas as $encuesta)
                            <div class="panel-heading">


                                        <h3 class="panel-title">Año: {{ $encuesta->year }} - Asignatura: {{ $encuesta->asignatura_name }} -
                                        Modalidad: {{ $encuesta->modalidad }} - Profesor: {{ $encuesta->name }}

                            </div>
                            <div class="panel-body">

                                    {!! Form::open(['url' =>  route('bbenc', ['id' => $encuesta->id]), 'method' => 'delete' ])  !!}
                                            <button type="submit" class="btn btn-primary btn-sm">Borrar</button>

                                <a href="{{ route('pbenc', ['id' => $encuesta->id]) }}" target="_blank">
                                    <button type="button" class="btn btn-primary btn-sm">Imprimir</button>
                                </a>
                                {!! Form::close() !!}

                            </div>

                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
