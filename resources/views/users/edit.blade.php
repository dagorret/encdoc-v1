@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                Editar Usuarios
            </div>
                <div class="panel-body">
                    @include('partials.errors')
                    {!! Form::open(['url' =>  route('users.update', ['id' => $user->id]),  'method' => 'patch' ])  !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Nombre Completo', ['class' => 'control-label']) !!}
                        {!! Form::text('name', $user->name,
                                        ['required',
                                         'class' => 'form-control',
                                         'placeholder' => 'Apelllido y Nombre'
                                        ])
                        !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('dni', 'D.N.I.', ['class' => 'control-label']) !!}
                        {!! Form::number('dni', $user->dni,
                                    ['require',
                                     'class' => 'form-control',
                                     'placeholder' => '99999999',
                                     'min' => '1000000',
                                     'max' => '99999999'
                                     ])
                        !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Correo Electrónico', ['class' => 'control-label']) !!}
                        {!! Form::email('email', $value = $user->email,
                                        $attributes = ['required', 'class' => 'form-control',
                                                       'placeholder' => 'usuario@ejemplo.com'] )
                        !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', 'Clave', ['class' => 'control-label']) !!}
                        {!! Form::password('password',
                                            [
                                             'class' => 'form-control',
                                             'placeholder' => '********'
                                            ])
                         !!}
                        <p class="help-block">La clave debe ser como mínimo de 6 caracteres. Tener algún dígito y alguna
                        mayúscula</p>
                        <p class="help-block">Todos los Campos son Requeridos</p>
                    </div>
                    <button type="submit" class="btn btn-default glyphicon glyphicon-save">Grabar</button>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
