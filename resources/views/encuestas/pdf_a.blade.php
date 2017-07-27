<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Auto Informe Docente : {{ $encuesta->name }}</title>

    <link href="{{ URL::asset('css/pdf.css') }}" rel="stylesheet" type='text/css' media="all">
</head>
<body>
<header class="clearfix">
    <h1>Auto Informe Docente </h1>
    <div class="clearfix">
        <div>Año: <strong>{{ $encuesta->year }}</strong></div>
        <div>Nombre: <strong>{{ $encuesta->name }} </strong></div>
        <div>DNI: {{ $encuesta->dni }}</div>
        <div>Email: {{ $encuesta->email }}</div>
        <div>TE: {{ $encuesta->phone }}</a></div>
        <div><span>Cargo:</span> {{ $encuesta->cargo }}</div>
        <div><span>Dedicación:</span> J{{ $encuesta->dedicacion }}</div>
        <div><span>Caracter:</span> {{ $encuesta->caracter }}</div>
        <div><span>Departamento:</span> {{ $encuesta->departamento }}</div>
    </div>
</header>
<p>Estimado docente:</p>
<p>La confección de este informe anual permitirá nutrir de elementos de valoración al Comité de Control de Gestión de Carrera Docente establecido por Resolución N°309/09 del Consejo Superior a efectos de emitir un dictamen acerca de su desempeño académico en el bienio.
    Este formulario es abierto, por tal motivo, describa las tareas realizadas en cada ámbito (Docencia, Investigación, Extensión, Gestión y Capacitación personal) aún cuando no tenga certificación oficial de haberlas realizado.
    La información aquí brindada tiene el carácter de Declaración Jurada y permitirá profundizar las fortalezas y corregir las debilidades que se detecten, siendo la meta a alcanzar el mejoramiento de la calidad y la excelencia académica.
</p>
<h3>DOCENCIA</h3>
<p>
    No omita indicar las materias en las que dictó clases y las modalidades (Presencial y/o a Distancia) en las que participó; material que haya preparado para las materias de las que formó parte; participación en la elaboración y/o corrección y/o devolución de exámenes parciales y/o finales; formación de recursos humanos en las cátedras en las que se desempeña; dirección o codirección en trabajos finales y/o colaboración en la elaboración de trabajos finales. Describa la temática y el lugar donde desarrolla docencia de posgrado; informe la dirección o codirección y/o colaboración en tesis y becas de posgrado; detalle su participación en proyectos de innovación pedagógica, trabajos presentados en reuniones científicas y trabajos publicados vinculados con la docencia; relate su participación en tutorías, pasantías, prácticas socio-comunitarias y trabajos de extensión relacionados con la docencia; declare toda otra actividad que considere de importancia, recuerde que no es necesario contar con certificación de la tarea realizada.
</p>
<h3>INVESTIGACION</h3>
<p>
    No omita indicar Proyecto y/o Programa del que forma parte, tareas que realizó (por ejemplo: recopilación bibliográfica, recopilación de datos, confección de tabla de datos, procesamientos, elaboración de informes, etc.), trabajos presentados en reuniones científicas (indicando título y lugar) y trabajos publicados (indicando título y ámbito de publicación) en el marco del proyecto. Detalle la dirección o codirección y/o colaboración en Ayudantías y Becas de Investigación y Extensión relacionadas con la investigación. Puede adjuntar los informes ya elaborados y presentados a los organismos pertinentes.
</p>
<h3>
    EXTENSION
</h3>
<p>
    No omita las tareas realizadas con su participación en tareas de extensión. Puede adjuntar los informes ya elaborados y presentados a los organismos pertinentes.
</p>
<h3>
    GESTION
</h3>
<p>
    No omita las tareas realizadas con su participación como funcionario o integrante de comisiones de la Facultad o de la Universidad, indicando si revisten el carácter de Ad-Honorem o Rentado.
</p>
<h3>
    CAPACITACION
</h3>
<p>
    No omita describir las tareas de capacitación personal (formal o no formal) vinculadas a la actividad docente de grado y posgrado, investigación y extensión. Incluya aquí la adquisición y/o consulta y/o lectura y/o estudio de nueva bibliografía y/o software.
</p>
            <p class="srvice"><strong>Docencia</strong></p>
            <p class="service">{!! nl2br(($encuesta->docencia)) !!}</p>
            <p class="service"><strong>Investigación</strong></p>
            <p class="service">{!! nl2br($encuesta->investigacion) !!}</p>
            <p class="service"><strong>Extensión</strong></p>
            <p class="servicce">{!! nl2br($encuesta->extension) !!}</p>
            <p class="service"><strong>Gestión</strong></p>
            <p class="servicce">{!! nl2br($encuesta->gestion) !!}</p>
            <p class="service"><strong>Capacitación</strong></p>
            <p class="servicce">{!! nl2br($encuesta->capacitacion) !!}</p>
<hr>
    <div id="notices">
        <div class="notice">Esta encuesta ha sido generada por "EncDoc - FCE - 2016".</div>
    </div>
</body>
</html>
