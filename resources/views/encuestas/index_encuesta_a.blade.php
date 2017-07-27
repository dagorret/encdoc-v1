@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel panel-default">
                    <div class="panel-heading">Formmularios A</div>
                    <div class="panel-body">
                        @if(Session::has('flash_message'))
                            <div class="alert alert-success"><em> {!! session('flash_message') !!}</em></div>
                        @endif

                        <p><strong> {{ $user->name }}</strong></p>
                        <p class="help-block">Ayuda. Llene la encuesta. Confirmelá y luego Imprima. La opción de Imprimir
                            aparece luego de grabar. Una vez grabada no se puede modificar. Consulte a Sec.
                            Académica</p>
                        <div class="panel panel-default">
                            <div class="panel-heading">Nueva Encuesta</div>
                            <div class="panel-body">
                                {!! Form::open(['url' =>  route('naenca', ['id' => Auth::user()->id]), 'method' => 'post' ])  !!}
                                <div class="form-group">
                                    {!! Form::label('year', 'Año', ['class' => 'control-label']) !!}
                                    <div class='input-group date' id='year'>
                                        {!! Form::text('year', '',
                                                   ['require',
                                                    'class' => 'form-control'
                                                                             ])
                                    !!} <span class="label label-default">Ingrese el año para la cual la encuesta será creada.</span>
                                    </div>
                                    <button type="submit" class="btn btn-default glyphicon glyphicon-plus">Nueva
                                    </button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">Lista de Encuestas</div>
                            @foreach( $encuestas as $encuesta)
                                <div class="panel-heading">
                                    <h3 class="panel-title">ID: {{ $encuesta->id}} - Año: {{ $encuesta->year }}</h3>
                                </div>
                                <div class="panel-body">
                                    @if($encuesta->estado == 'A')
                                        <a href="{{ route('eaenc', ['id' => $encuesta->id]) }}">
                                            <button type="button" class="btn btn-primary btn-sm">Editar</button>
                                        </a>
                                        {!! Form::open(['url' =>  route('baenc', ['id' => $encuesta->id]), 'method' => 'delete' ])  !!}
                                        <button type="submit" class="btn btn-primary btn-sm">Borrar</button>
                                        {!! Form::close() !!}
                                        <a href="{{ route('csaenc', ['id' => $encuesta->id]) }}">
                                            <button type="button" class="btn btn-primary btn-sm">Confirmar</button>
                                        </a>
                                    @else
                                        <a href="{{ route('paenc', ['id' => $encuesta->id]) }}" target="_blank">
                                        <button type="button" class="btn btn-primary btn-sm">Imprimir</button>
                                        </a>
                                    @endif
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
