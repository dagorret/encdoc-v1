@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Crear Usuario
                </div>
                <div class="panel-body">
                    @include('partials.errors')
                    {!! Form::open(['url' =>  route('searchusers'),  'method' => 'post' ])  !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Texto parcial del Nombre', ['class' => 'control-label']) !!}
                        {!! Form::text('name', old('name'),
                                        ['required',
                                         'class' => 'form-control',
                                         'placeholder' => 'Nombre a buscar'
                                        ])
                        !!}
                    </div>
                        <p class="help-block">Ingrese parte del nombre a buscar.</p>
                    </div>
                    <button type="submit" class="btn btn-default glyphicon glyphicon-search">Buscar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
