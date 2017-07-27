@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>
                <div class="panel-body">
                    <div class="bg-info">
                        <p>El Registro se encuentra deshabilitado. Por favor contactarse personalmente con la
                        Secretaría Acadmémica de la Facultad de Ciencias Económicas.</p>
                        <p>Su clave únicamente puede ser recuperada mediante su correo electrónico que la Secretaría Académica
                        tiene registrado con la Facultad de Ciencias Económicas de la UNRC.</p>
                        <p>Para Recuperar la clave dirígase a
                            <a href="/password/reset">"Ingresar -> Olvído su Clave?" </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
