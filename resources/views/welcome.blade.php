@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido a Encuentas Docente para las FCE-UNRC</div>

                <div class="panel-body">
                    <p>Esta es la Aplicación para los Formularios A, B y C de la encuenta docente.</p>
                    <p>Para Iniciar la aplicación ingrese desde el menú ubicado arriba</p>
                    <p>Su Usuario es su correo electrónico que posee registrado por la FCE. Su clave le fue enviada
                    por correo electrónico. Sino la recuerda puede recuperar la clave desde el menú de "Ingresar".</p>
                    <p>El proceso de recupero le enviará una clave a su correo electrónico con un vincúlo. Péguelo en
                    su navegador favorito o si puede haga click desde allí. Siga los pasos que la página le propone.
                    </p>
                    <p class="bg-info">Su correo puede que no esté registrado ante la Secretaría Académica.
                    Para verificar y/o añadir su correo, por favor dirigise personalmente a dicha Secretaría.
                    El proceso de registro no es automático, y debe ser verificado por personal de dicha Secretaria</p>
                </div>
                <div class="panel-body">
                    <p>Para Cambiar contraseña dirígase a <a href="http://app2.eco.unrc.edu.ar/password/reset">Olvidé Contraseña</a>. 
                    Ingrese su correo electrónico. Le llegará un correo con una dirección específica para ingresar la nueva contraseña que 
                    Usted desea.
                    <p>Soporte Técnico: Llenar formulario en <a href="http://fce.unrc.edu.ar">Soporte Técnico FCE</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

