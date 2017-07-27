<?php

namespace EncDoc\Http\Controllers;

use EncDoc\BEnc;
use EncDoc\Materia;
use EncDoc\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

use EncDoc\Http\Requests;

class BEncController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index( Request $request)
    {
        $user = Auth::user();
        $encuestas = BEnc::where('user_id', '=', $user->id)->get();



        return view('encuestas.index_encuesta_b', ['encuestas' => $encuestas, 'user' => $user]);
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

        $inicio = intval(env('YEAR_SURVEY_START'));
        $fin = intval(env('YEAR_SURVEY_END'));
        $year = $request->year;

        if ( !($year >= $inicio && $year <= $fin))
        {
            \Session::flash('flash_message', 'Año incorrecto');
            return back()->withInput();
        }
        else {
            $encuesta = BEnc::where('year', '=', $year)->
                                  where('user_id', '=', $user->id)->
                              where('docente_id', '=', $docente_id->id)->
                              where('modalidad', '=', $request->get('modalidad'))->
                              where('asignatura', '=', $request->get('asignatura'))->get();

            if ($encuesta->count() > 0) {
                \Session::flash('flash_message', "Ya exite ese Formulario");
                return back();
            }
        }

        if (trim(request()->get('departamento')) == '')
        {
            \Session::flash('flash_message', 'Falta dato Departamento');
            return back()->withInput();
        }
        
        $materias = Materia::where('codigo', '=',$request->get('asignatura'))->first();
        if ($materias == null)
        {
            \Session::flash('flash_message', 'Asignatura incorrecta');
            return back()->withInput();
        }
        


        $benc = new BEnc();
        $benc->year = $year;
        $benc->cuatrimestre = $request->get('cuatrimestre');
        $benc->asignatura = $materias->codigo;
        $benc->departamento = $request->get('departamento');
        $benc->modalidad = $request->get('modalidad');
        $benc->informante = $user->name;
        $benc->name = $docente_id->name;
        $benc->asignatura_name = $materias->nombre;
        $benc->informante_id = $user->id;
        $benc->docente_id = $docente_id->id;
        
        return view('encuestas.encuesta_b', ['data' => $benc]);

    }

    public function save($id, Request $request)
    {
        $benc = new BEnc();
        $benc->year = $request->get('year');
        $benc->cuatrimestre = $request->get('cuatrimestre');
        $benc->asignatura = $request->get('asignatura');
        $benc->asignatura_name = $request->get('asignatura_name');
        $benc->departamento = $request->get('departamento');
        $benc->modalidad = $request->get('modalidad');
        $benc->informante = $request->get('informante');
        $benc->name = $request->get('name');
        $benc->dedicacion = $request->get('dedicacion');
        $benc->cargo = $request->get('cargo');
        $benc->caracter = $request->get('caracter');

        $benc->bp1  = $request->get('bp1');
        $benc->bp2  = $request->get('bp2');
        $benc->bp3  = $request->get('bp3');
        $benc->bp4  = $request->get('bp4');
        $benc->bp5  = $request->get('bp5');
        $benc->bp6  = $request->get('bp6');
        $benc->bp7  = $request->get('bp7');
        $benc->bp8  = $request->get('bp8');
        $benc->bp9  = $request->get('bp9');
        $benc->bp10 = $request->get('bp10');
        $benc->bp11 = $request->get('bp11');
        $benc->bp12 = $request->get('bp12');
        $benc->bp13 = $request->get('bp13');
        $benc->bp14 = $request->get('bp14');
        $benc->bp15 = $request->get('bp15');

        $benc->otras = $request->get('otras');
        $benc->user_id = $id;
        $benc->docente_id = $request->get('docente_id');

        $benc->save();
        return redirect(route('ibenc'));
    }

    public function borrar($id, Request $request)
    {
        $encuesta = BEnc::findOrFail($id);

        $encuesta->delete();
        \Session::flash('flash_message', "La encuesta " . $encuesta->id . " ha sido borrada");
        return back();

    }

    public function imprimir($id)
    {
        $encuesta = BEnc::findOrFail($id);

        if ( $encuesta->user_id == \Auth::user()->id) {

            $html= view('encuestas.pdf_b', ['encuesta' => $encuesta]);
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadHTML($html);
            return $pdf->stream();

        }

    }
}
