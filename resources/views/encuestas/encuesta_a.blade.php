@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p>{{ $name }}</p>
                    Formulario A, para {{ $name }} - Año: {{ $encuesta->year }}
                    <p class="help-block">Los Datos, aun estando registrado como el Nombre y el email deberán ser
                    cargados, puesto que cada formuario es independiente del usuario. Además usted es quien
                    confirma dichos datos, independientemente de los registros en Sec. Académica. </p>
                    <p class="help-block">Estimado docente:
                        La confección de este informe anual permitirá nutrir de elementos de valoración al Comité de Control de Gestión de Carrera Docente establecido por Resolución N°309/09 del Consejo Superior a efectos de emitir un dictamen acerca de su desempeño académico en el bienio.
                        Este formulario es abierto, por tal motivo, describa las tareas realizadas en cada ámbito (Docencia, Investigación, Extensión, Gestión y Capacitación personal) aún cuando no tenga certificación oficial de haberlas realizado.
                        La información aquí brindada tiene el carácter de Declaración Jurada y permitirá profundizar las fortalezas y corregir las debilidades que se detecten, siendo la meta a alcanzar el mejoramiento de la calidad y la excelencia académica.
                    </p>
                </div>
                <div class="panel-body">
                    @include('partials.errors')
                    {!! Form::open(['url' =>  route('saenc', ['id' => $encuesta->id]),  'method' => 'patch' ])  !!}
                    <a href="{{ route('iaenc') }}"<button class="btn btn-primary btn-sm">Volver</button> </a>
                    <div class="form-group">
                        {!! Form::label('name', 'Nombre Completo', ['class' => 'control-label']) !!}
                        {!! Form::text('name', $encuesta->name,
                        ['required',
                        'class' => 'form-control',
                        'placeholder' => 'Apelllido y Nombre'
                        ])
                        !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('dni', 'D.N.I.', ['class' => 'control-label']) !!}
                        {!! Form::number('dni', $encuesta->dni,
                        ['required',
                        'class' => 'form-control',
                        'placeholder' => '999999',
                        'min' => '100000',
                        'max' => '99999999'
                        ])
                        !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Correo Electrónico', ['class' => 'control-label']) !!}
                        {!! Form::email('email', $value = $encuesta->email,
                        $attributes = ['required', 'class' => 'form-control',
                        'placeholder' => 'usuario@ejemplo.com'] )
                        !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('phone', 'Teléfono', ['class' => 'control-label']) !!}
                        {!! Form::text('phone', $encuesta->phone,
                        $attributes = ['required', 'class' => 'form-control',
                        'placeholder' => 'Número TE'] )
                        !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('departamento', 'Departamento', ['class' => 'control-label']) !!}
                        {!! Form::text('departamento', $encuesta->departamento,
                        $attributes = ['required', 'class' => 'form-control',
                        'placeholder' => 'Nombre Departamento'] )
                        !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('cargo', 'Cargo', ['class' => 'control-label']) !!}
                        {!! Form::text('cargo', $encuesta->cargo,
                        $attributes = ['required', 'class' => 'form-control',
                        'placeholder' => 'Cargo Docente'] )
                        !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('caracter', 'Caráter', ['class' => 'control-label']) !!}
                        {!! Form::text('caracter', $encuesta->caracter,
                        $attributes = ['required', 'class' => 'form-control',
                        'placeholder' => 'Carácter del Cargo'] )
                        !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('dedicacion', 'Dedicación', ['class' => 'control-label']) !!}
                        {!! Form::text('dedicacion', $encuesta->dedicacion,
                        $attributes = ['required', 'class' => 'form-control',
                        'placeholder' => 'Dedicación del Cargo'] )
                        !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('docencia', 'Docencia', ['class' => 'control-label']) !!}
                        <a href="{{ route('help', ['id' => 1]) }}" target="_blank" class="glyphicon glyphicon-question-sign">Instrucciones</a>
                        {!! Form::textarea('docencia', $encuesta->docencia,
                        $attributes = ['class' => 'form-control',
                        'placeholder' => 'Resumen de Docencia'] )
                        !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('investigacion', 'Investigación', ['class' => 'control-label']) !!}
                        <a href="{{ route('help', ['id' => 2]) }}" target="_blank" class="glyphicon glyphicon-question-sign">Instrucciones</a>
                        {!! Form::textarea('investigacion', $encuesta->investigacion,
                        $attributes = ['class' => 'form-control',
                        'placeholder' => 'Resumen de Investigación'] )
                        !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('extension', 'Extensión', ['class' => 'control-label']) !!}
                        <a href="{{ route('help', ['id' => 3]) }}" target="_blank" class="glyphicon glyphicon-question-sign">Instrucciones</a>
                        {!! Form::textarea('extension', $encuesta->extension,
                        $attributes = ['class' => 'form-control',
                        'placeholder' => 'Resumen de Extensión'] )
                        !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('gestion', 'Gestión', ['class' => 'control-label']) !!}
                        <a href="{{ route('help', ['id' => 4]) }}" target="_blank" class="glyphicon glyphicon-question-sign">Instrucciones</a>
                        {!! Form::textarea('gestion', $encuesta->gestion,
                        $attributes = ['class' => 'form-control',
                        'placeholder' => 'Resumen de Gestión'] )
                        !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('capacitacion', 'Capacitación', ['class' => 'control-label']) !!}
                        <a href="{{ route('help', ['id' => 5]) }}" target="_blank" class="glyphicon glyphicon-question-sign">Instrucciones</a>
                        {!! Form::textarea('capacitacion', $encuesta->capacitacion,
                        $attributes = ['class' => 'form-control',
                        'placeholder' => 'Resumen de Capacitación'] )
                        !!}
                    </div>
                    <button type="submit" class="btn btn-default glyphicon glyphicon-save">Grabar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
