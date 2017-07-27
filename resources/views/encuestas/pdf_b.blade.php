
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Informe del Docente Responsable sobre Desempeño de Integrantes del Equipo de Cátedra: {{ $encuesta->name }}</title>

    <link href="{{ URL::asset('css/pdf.css') }}" rel="stylesheet" type='text/css' media="all">
</head>
<body>
<header class="clearfix">
    <h1>Informe del Docente Responsable sobre Desempeño de Integrantes del Equipo de Cátedra</h1>
    <div class="clearfix">
        <div>Año: <strong>{{ $encuesta->year }}</strong></div>
        <div>Cuatrimestre: <strong>{{ $encuesta->cuatrimestre }}</strong></div>
        <div>Departamento: <strong>{{ $encuesta->departamento }} </strong></div>
        <div>Asignatura: {{ $encuesta->asignatura_name }}</div>
        <div>Modalidad: <strong>@if ($encuesta->modalidad == 'P')
                                    Presencial
                                @else
                                    Distancia
                                @endif
            </strong> </div>

        <div><span>Nombre del Profesor Informante:</span> <strong>{{ $encuesta->informante }}</strong></div>
        <hr>
        <div><span>Nombre Profesor informado:</span> {{ $encuesta->name }}</div>
        <div><span>Dedicación:</span> {{ $encuesta->dedicacion }}</div>
        <div><span>Cargo:</span> {{ $encuesta->cargo }}</div>
        <div><span>Carácter:</span> {{ $encuesta->caracter }}</div>
    </div>
</header>
    <hr>
<p>Estimado docente</p>
<p>
    La confección de este informe anual permitirá nutrir de elementos de valoración al Comité de Control de Gestión de Carrera Docente establecidos por Resolución N°309/09 del Consejo Superior a efectos de emitir un dictamen acerca del desempeño académico, en el bienio, de los docentes que integran su equipo de trabajo. Su respuesta permitirá profundizar las fortalezas y corregir las debilidades que se detecten, siendo la meta a alcanzar el mejoramiento de la calidad y la excelencia académica.
</p>
<p>
    A continuación encontrará un conjunto de enunciados que se valoran seleccionando la opción que corresponda, según la siguiente escala:
    A = Siempre, B = Casi Siempre, C = Algunas Veces, D = Casi Nunca, E = Nunca F = No tengo elementos para opinar y G = No Corresponde.
</p>
<p><strong>Items:</strong></p>

            <p class="srvice">El docente asiste a las reuniones de cátedra programadas<strong>:{{ $encuesta->bp1 }}</strong></p>
            <p class="srvice">El docente atiende las consultas en los horarios acordados oportunamente2<strong>:{{ $encuesta->bp2 }}</strong></p>
            <p class="srvice">El docente participa en la confección de exámenes parciales y finales<strong>:{{ $encuesta->bp3 }}</strong></p>
            <p class="srvice">El docente concurre a los exámenes parciales y finales<strong>:{{ $encuesta->bp4 }}</strong></p>
            <p class="srvice">El docente participa en la corrección de los exámenes parciales y finales<strong>:{{ $encuesta->bp5 }}</strong></p>
            <p class="srvice">El trato del docente con el resto de integrantes de la cátedra es cordial<strong>:{{ $encuesta->bp6 }}</strong></p>
            <p class="srvice">El docente desarrolla las tareas que se le encomiendan<strong>:{{ $encuesta->bp7 }}</strong></p>
            <p class="srvice">El docente manifiesta interés por capacitarse en el ámbito pedagógico y/o disciplinar<strong>:{{ $encuesta->bp8 }}</strong></p>
            <p class="srvice">El docente ha participado en la confección de materiales para la asignatura9<strong>:{{ $encuesta->bp9 }}</strong></p>
            <p class="srvice">El docente participa en la dirección o codirección y/o colaboración en la elaboración de trabajos finales, pasantías y/o tutorías<strong>:{{ $encuesta->bp10 }}</strong></p>
            <p class="srvice">El docente participa en la formación de recursos humanos de la cátedra 11<strong>:{{ $encuesta->bp11 }}</strong></p>
            <p class="srvice">El docente participa en proyectos de investigación o para el mejoramiento de la enseñanza<strong>:{{ $encuesta->bp12 }}</strong></p>
            <p class="srvice">El docente manifiesta interés por actividades de extensión y prácticas socio-comunitarias<strong>:{{ $encuesta->bp13 }}</strong></p>
            <p class="srvice">El docente participa en actividades de gestión, asesoramiento y/o gobierno universitario rentadas o ad-honorem<strong>:{{ $encuesta->bp14 }}</strong></p>
            <p class="srvice">El docente participa en actividades institucionales (difusión de carreras, administración, coordinación de proyectos académicos, etc.) en el ámbito del Departamento y/o Facultad, rentadas o ad-honorem<strong>:{{ $encuesta->bp15 }}</strong></p>
    <hr>
    <p class="srvice">Otras Consideraciones:{{ $encuesta->otras }}</p>

<p>&nbsp;</p>
<p>&nbsp;</p>

<p align="rigth">-----------------------</p>
<p align="rigth">        Firma </p>
<hr>
    <div id="notices">

        <div class="notice">Esta encuesta ha sido generada por "EncDoc - FCE - 2016".</div>
    </div>
</body>
</html>