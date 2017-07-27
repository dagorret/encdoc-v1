<?php

namespace EncDoc\Http\Controllers;

use EncDoc\CEnc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use EncDoc\Http\Requests;
use EncDoc\User;
use EncDoc\Materia;

class CEncController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $encuestas = CEnc::where('user_id', '=', $user->id)->get();
        
        return view('encuestas.index_encuesta_c', ['encuestas' => $encuestas, 'user' => $user]);
    }

    public function create($id, Request $request)
    {
        $user= User::findOrFail($id);

        $docente_id = User::where('dni', '=', $request->get('docente_id'))->first();
        if ($docente_id == null)
        {
            \Session::flash('flash_message', 'DNI de docente inválido');
            return back()->withInput();
        }


        $materias = Materia::where('codigo', '=',$request->get('asignatura'))->first();
        if ($materias == null)
        {
            \Session::flash('flash_message', 'Asignatura incorrecta');
            return back()->withInput();
        }


        $inicio = intval(env('YEAR_SURVEY_START'));
        $fin = intval(env('YEAR_SURVEY_END'));
        $year = $request->year;

        if ( !($year >= $inicio && $year <= $fin))
        {
            \Session::flash('flash_message', 'Año incorrecto');
            return back()->withInput();
        }
        else {


            $encuesta = CEnc::where('year', '=', intval($year))->
                where(function ($q)  use ($user, $request, $docente_id){
                   $q->where('user_id', '=', $user->id)->
                   where('docente_id', '=', $docente_id->id)->
                   where('modalidad', '=', $request->get('modalidad'))->
                   where('asignatura', '=', intval($request->get('asignatura')));
                 })->get();


            //$sql = "select * from `cencs` where (`year` = %d) and (`user_id` = %d) and (`docente_id` = %d) and (`modalidad` = '%s') and (`asignatura` = %d)";

            //$sql = sprintf($sql,intval($year), $user->id, $docente_id, $request->get('modalidad'), intval($request->get('asignatura')));

            //dd($encuesta);
            if ($encuesta->count() > 0) {
                \Session::flash('flash_message', "Ya exite ese Formulario");
                return back();
            }
        }

        $cenc = new CEnc();
        $cenc->year = $year;
        $cenc->cuatrimestre = $request->get('cuatrimestre');
        $cenc->asignatura = $materias->codigo;
        $cenc->modalidad = $request->get('modalidad');
        $cenc->name = $docente_id->name;
        $cenc->asignatura_name = $materias->nombre;
        $cenc->user_id = $user->id;
        $cenc->docente_id = $docente_id->id;

        return view('encuestas.encuesta_c', ['data' => $cenc]);

    }

    public function save($id, Request $request)
    {
        $cenc = new CEnc();
        $cenc->year = $request->get('year');
        $cenc->cuatrimestre = $request->get('cuatrimestre');
        $cenc->asignatura = $request->get('asignatura');
        $cenc->asignatura_name = $request->get('asignatura_name');
        $cenc->modalidad = $request->get('modalidad');
        $cenc->name = $request->get('name');

        $cenc->cp1  = $request->get('cp1');
        $cenc->cp2  = $request->get('cp2');
        $cenc->cp3  = $request->get('cp3');
        $cenc->cp4  = $request->get('cp4');
        $cenc->cp5  = $request->get('cp5');
        $cenc->cp6  = $request->get('cp6');
        $cenc->cp7  = $request->get('cp7');
        $cenc->cp8  = $request->get('cp8');
        $cenc->cp9  = $request->get('cp9');
        $cenc->cp10 = $request->get('cp10');
        $cenc->cp11 = $request->get('cp11');
        $cenc->cp12 = $request->get('cp12');
        $cenc->cp13 = $request->get('cp13');
        $cenc->cp14 = $request->get('cp14');
        $cenc->cp15 = $request->get('cp15');
        $cenc->cp16 = $request->get('cp16');
        $cenc->cp17 = $request->get('cp17');
        $cenc->cp18 = $request->get('cp18');


        $cenc->user_id = $id;
        $cenc->docente_id = $request->get('docente_id');

        $cenc->save();
        return redirect(route('icenc'));
    }

    public function borrar($id, Request $request)
    {
        $encuesta = CEnc::findOrFail($id);

        $encuesta->delete();
        \Session::flash('flash_message', "La encuesta " . $encuesta->id . " ha sido borrada");
        return back();

    }

    public function imprimir($id)
    {
        $encuesta = CEnc::findOrFail($id);

        if ( $encuesta->user_id == \Auth::user()->id) {

            $html= view('encuestas.pdf_c', ['encuesta' => $encuesta]);
            
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadHTML($html);
            return $pdf->stream();

        }

    }
}
