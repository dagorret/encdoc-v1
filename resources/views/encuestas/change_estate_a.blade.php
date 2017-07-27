@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p>{{ $name }}</p>
                    Confirmar el Formulario A
                    <p class="help-block"><strong>Una vez conformado no se podrá modificar</strong>.
                        Luego de confirmar usted podrá imprimir.</p>
                    <p class="help-block">
                        Si usted considera que tiene datos incorrectos, deberá ser borrado por el Area Técnica, a pedido de la Secretaria
                        Académica.</p>
                </div>
                {!! Form::open(['url' =>  route('caenc', ['id' => $encuesta->id]),  'method' => 'patch' ])  !!}
                <div class="form-group">
                    <button type="submit" class="btn btn-primary glyphicon glyphicon-ok"> Confirmar Formulario </button>
                </div>
                {{ Form::close() }}
            </div>
        </div>


    </div>
@endsection
