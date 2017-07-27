<?php

namespace EncDoc\Http\Controllers;

use EncDoc\AEnc;
use EncDoc\User;
use Illuminate\Http\Request;

use EncDoc\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;

class AEncController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index( Request $request)
    {
        $user = Auth::user();
        $encuestas = AEnc::where('user_id', '=', $user->id)->get();

      /*  if ($aenc == null){
            $aenc = new AEnc();
            $aenc->dni = 0;
            $aenc->name = '';
            $aenc->email = '';
            $aenc->phone = '';
            $aenc->year = '';
            $aenc->departamento = '';
            $aenc->cargo = '';
            $aenc->caracter = '';
            $aenc->dedicacion = '';
            $aenc->docencia = '';
            $aenc->investigacion = '';
            $aenc->extension = '';
            $aenc->gestion = '';
            $aenc->capacitacion = '';
           

            $aenc->user_id = $user_id;
            $aenc->save();
        }*/
        
        return view('encuestas.index_encuesta_a', ['encuestas' => $encuestas, 'user' => $user]);
    }

    public function edit($id, Request $request)
    {
        $aenc = AEnc::findOrFail($id);

        if ($aenc == null || $aenc->user_id != Auth::user()->id)
            return redirect('/home'); else {

            return view('encuestas.encuesta_a', ['encuesta' => $aenc, 'name' => \Auth::user()->name]);
        }
    }

    public function save ($id, Request $request)
    {

        $encuesta = AEnc::findOrFail($id);

        $rules = [ 
            'name'         => ['required', 'max:50'],
            'email'        => ['required', 'email'],
            'dni'          => ['required', 'numeric','digits_between:6,8'],
            'phone'        => ['required'],
            'cargo'        => ['required'],
            'departamento' => ['required'],
            'dedicacion'   => ['required'],
            'caracter'     => ['required']
        ];

        $this->validate($request,$rules);
        $encuesta->fill($request->all());
        $encuesta->save();
        
        return redirect(route('iaenc'));
    }

    public function grabarshow($id)
    {
        $encuesta = AEnc::findOrFail($id);

        
        return view('encuestas.change_estate_a', ['encuesta' => $encuesta, 'name' => $encuesta->name]);
        
    }

    public function grabar($id)
    {
        $encuesta = AEnc::findOrFail($id);

        $encuesta->estado = 'G';
        $encuesta->save();

        return redirect(route('iaenc'));

    }

    public function imprimir($id)
    {
        $encuesta = AEnc::findOrFail($id);

        if ( $encuesta->user_id == \Auth::user()->id) {

            $html= view('encuestas.pdf_a', ['encuesta' => $encuesta]);
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadHTML($html);
            return $pdf->stream();
        }

    }

    public function create($id, Request $request)
    {
        $user= User::findOrFail($id);

        $inicio = intval(env('YEAR_SURVEY_START'));
        $fin = intval(env('YEAR_SURVEY_END'));
        $year = $request->year;
        if ( !($year >= $inicio && $year <= $fin))
        {
            \Session::flash('flash_message', 'Año incorrecto');
            return back();
        }
        else {
            $encuesta = AEnc::where('year', '=', $year)->where('user_id', '=', $user->id)->get();
            if ($encuesta->count() > 0) {
                \Session::flash('flash_message', "Ya exite ese Formulario");
                return back();
            }
        }

        $aenc = new AEnc();
        $aenc->dni = 0;
        $aenc->name = '';
        $aenc->email = '';
        $aenc->phone = '';
        $aenc->year = $request->year;
        $aenc->departamento = '';
        $aenc->cargo = '';
        $aenc->caracter = '';
        $aenc->dedicacion = '';
        $aenc->docencia = '';
        $aenc->investigacion = '';
        $aenc->extension = '';
        $aenc->gestion = '';
        $aenc->capacitacion = '';
        $aenc->user_id = $user->id;
        $aenc->save();

        return back();

    }

    public function borrar($id, Request $request)
    {
        $encuesta = AEnc::findOrFail($id);

        $encuesta->delete();
        \Session::flash('flash_message', "La encuesta " . $encuesta->id . " ha sido borrada");
        return back();

    }

}
