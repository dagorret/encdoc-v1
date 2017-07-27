<?php

namespace EncDoc\Http\Controllers;

use Illuminate\Http\Request;

use EncDoc\Http\Requests;

class HelpController extends Controller
{
    public function index($id)
    {
        $data = $this->getData($id);
        return view('encuestas.help', ['data' => $data]);
    }

    private function getData($id)
    {
        switch ($id) {
            case 1:
                $help = "
                <h1>DOCENCIA</h1>
                No omita indicar las materias en las que dictó clases y las modalidades (Presencial y/o a Distancia) en las que participó; material que haya preparado para las materias de las que formó parte; participación en la elaboración y/o corrección y/o devolución de exámenes parciales y/o finales; formación de recursos humanos en las cátedras en las que se desempeña; dirección o codirección en trabajos finales y/o colaboración en la elaboración de trabajos finales. Describa la temática y el lugar donde desarrolla docencia de posgrado; informe la dirección o codirección y/o colaboración en tesis y becas de posgrado; detalle su participación en proyectos de innovación pedagógica, trabajos presentados en reuniones científicas y trabajos publicados vinculados con la docencia; relate su participación en tutorías, pasantías, prácticas socio-comunitarias y trabajos de extensión relacionados con la docencia; declare toda otra actividad que considere de importancia, recuerde que no es necesario contar con certificación de la tarea realizada.
                ";
                break;
            case 2:
                $help = "<h1>INVESTIGACION</h1>
                No omita indicar Proyecto y/o Programa del que forma parte, tareas que realizó (por ejemplo: recopilación bibliográfica, recopilación de datos, confección de tabla de datos, procesamientos, elaboración de informes, etc.), trabajos presentados en reuniones científicas (indicando título y lugar) y trabajos publicados (indicando título y ámbito de publicación) en el marco del proyecto. Detalle la dirección o codirección y/o colaboración en Ayudantías y Becas de Investigación y Extensión relacionadas con la investigación. Puede adjuntar los informes ya elaborados y presentados a los organismos pertinentes
                ";
                break;
            case 3:
                $help = "
                <h1>EXTENSION</h1>
                No omita las tareas realizadas con su participación en tareas de extensión. Puede adjuntar los informes ya elaborados y presentados a los organismos pertinentes
                ";
                break;
            case 4:
                $help ="
                <h1>GESTION</h1>
                No omita las tareas realizadas con su participación como funcionario o integrante de comisiones de la Facultad o de la Universidad, indicando si revisten el carácter de Ad-Honorem o Rentado.
                ";
                break;
            case 5;
                $help = "
                <h1>CAPACITACION</h1>
                No omita describir las tareas de capacitación personal (formal o no formal) vinculadas a la actividad docente de grado y posgrado, investigación y extensión. Incluya aquí la adquisición y/o consulta y/o lectura y/o estudio de nueva bibliografía y/o software.
                ";
                break;
        }
        
        return $help;

    }
}
