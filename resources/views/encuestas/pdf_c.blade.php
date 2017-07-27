
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Encuesta a los integrantes del equipo de cátedra sobre desempeño del Docente Responsable: {{ $encuesta->name }}</title>

    <link href="{{ URL::asset('css/pdf.css') }}" rel="stylesheet" type='text/css' media="all">
</head>
<body>
<header class="clearfix">
    <h1>Encuesta a los integrantes del equipo de cátedra sobre desempeño del Docente Responsable</h1>
    <div class="clearfix">
        <div>Año: <strong>{{ $encuesta->year }}</strong></div>
        <div>Cuatrimestre: <strong>{{ $encuesta->cuatrimestre }}</strong></div>
        <div>Asignatura: {{ $encuesta->asignatura_name }}</div>
        <div>Modalidad: <strong>@if ($encuesta->modalidad == 'P')
                    Presencial
                @else
                    Distancia
                @endif
            </strong> </div>

        <div><span>Nombre del Profesor Responsabe:</span> <strong>{{ $encuesta->name }}</strong></div>
    </div>
</header>
<hr>
<p>Facultad de Ciencias Económicas – Universidad Nacional de Río Cuarto</p>
<p>Estimado docente:</p>
<p>
    Esta encuesta se realiza para conocer el desempeño del Docente Responsable en el ámbito de la cátedra a la cual pertenece. Su respuesta permitirá profundizar las fortalezas y corregir las debilidades que se detecten, siendo la meta a alcanzar el mejoramiento de la calidad y la excelencia académica.

    A continuación encontrará un conjunto de enunciados que se valoran seleccionando la opción que corresponda, según la siguiente escala:

</p>
<div>Código de respuestas: A = Siempre, B = Casi Siempre, C = Algunas Veces, D = Casi Nunca, E = Nunca F = No tengo elementos para opinar y G = No Corresponde.</div>
<p><strong>Items:</strong></p>
<p class="srvice">El Docente Responsable otorga espacios de participación a los diferentes integrantes del equipo de cátedra1<strong>:{{ $encuesta->cp1 }}</strong></p>
<p class="srvice">El Docente Responsable planifica las actividades y establece un cronograma de realización durante el cuatrimestre.<strong>:{{ $encuesta->cp2 }}</strong></p>
<p class="srvice">El Docente Responsable  pone en consideración del resto de los integrantes de la cátedra el programa de la asignatura<strong>:{{ $encuesta->cp3 }}</strong></p>
<p class="srvice">El Docente Responsable asigna tareas entre los integrantes en función de la dedicación de cada uno<strong>:{{ $encuesta->cp4 }}</strong></p>
<p class="srvice">El Docente Responsable  cumple con los horarios de consultas<strong>:{{ $encuesta->cp5 }}</strong></p>
<p class="srvice">El Docente Responsable lo incentiva a que inicie o continúe un proceso de apacitación disciplinar y/o pedagógica<strong>:{{ $encuesta->cp6 }}</strong></p>
<p class="srvice">El ambiente de trabajo de la cátedra generado por el Docente Responsable es cordial<strong>:{{ $encuesta->cp7 }}</strong></p>
<p class="srvice">El Docente Responsable trata a los integrantes de la cátedra con respeto<strong>:{{ $encuesta->cp8 }}</strong></p>
<p class="srvice">El Docente Responsable desarrolla las tareas que le corresponden en función de su dedicación<strong>:{{ $encuesta->cp9 }}</strong></p>
<p class="srvice">El Docente Responsable acuerda la metodología de trabajo para abordar un tema en particular<strong>:{{ $encuesta->cp10 }}</strong></p>
<p class="srvice">El Docente Responsable muestra preparación en los nuevos conocimientos de la disciplina<strong>:{{ $encuesta->cp11 }}</strong></p>
<p class="srvice">El Docente Responsable comparte con los integrantes del equipo de cátedra los nuevos conocimientos adquiridos<strong>:{{ $encuesta->cp12 }}</strong></p>
<p class="srvice">El Docente Responsable incorpora nueva bibliografía<strong>:{{ $encuesta->cp13 }}</strong></p>
<p class="srvice">El Docente Responsable desarrolla materiales para la asignatura<strong>:{{ $encuesta->cp14 }}</strong></p>
<p class="srvice">El Docente Responsable comparte la producción de materiales con algún integrante del equipo de trabajo<strong>:{{ $encuesta->cp15 }}</strong></p>
<p class="srvice">El Docente Responsable convoca a reuniones de cátedra<strong>:{{ $encuesta->cp16 }}</strong></p>
<p class="srvice">El Docente Responsable acuerda con el equipo de cátedra una forma de trabajo y lo mantiene durante el cuatrimestre<strong>:{{ $encuesta->cp17 }}</strong></p>
<p class="srvice">El Docente Responsable utiliza los medios de comunicación para contactarse con los integrantes de su equipo<strong>:{{ $encuesta->cp18 }}</strong></p>
<hr>
<div id="notices">
    <div class="notice">Esta encuesta ha sido generada por "EncDoc - FCE - 2016".</div>
</div>
</body>
</html>