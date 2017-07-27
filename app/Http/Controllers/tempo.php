<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 26/06/16
 * Time: 15:07
 */


$docente_id = User::where('dni', '=', $request->get('docente_id'))->first();
if ($docente_id->count() == 0)
{
    \Session::flash('flash_message', 'DNI de docente inválido');
    return back()->withInput();
}

$docente_id = $docente_id->id;

$materias = Materia::where('codigo', '=',$request->get('asignatura'))->first();
if ($materias->count() == 0)
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
            //"select * from `cencs` where `year` = ? and `user_id` = ? and `docente_id` = ? and `modalidad` = ? and `asignatura` = ?"
            //$encuesta = CEnc::where('year', '=', $year)->get();
            //dd($encuesta);
            //$encuesta->where('user_id', '=', $user->id)->get();
            //where('docente_id', '=', $request->get('docente_id'))->
            //where('modalidad', '=', $request->get('modalidad'))->
            //where('asignatura', '=', $request->get('asignatura'))->toSql();

            //$encuesta = CEnc::where('year', '=', $year)->
            //    where(function ($q) {
             //       $q->where('user_id', '=', $user->id)->
              //          where('docente_id', '=', $request->get('docente_id'))->
               //         where('modalidad', '=', $request->get('modalidad'))->
                //        where('asignatura', '=', $request->get('asignatura'));
               // })->toSql();
            //where('user_id', '=', $user->id)->
            //where('docente_id', '=', $request->get('docente_id'))->
            //
            //
            /* \DB::enableQueryLog();
            //$results = \DB::select( \DB::raw("select * from `cencs` where `year` = :y and `user_id` = :u and `docente_id` = :d and `modalidad` = :m and `asignatura` = :a"),
                           array(
                                  'y' => intval($year),
                                  'u' => $user->id,
                                  'd' => intval($request->get('docente_id')),
                                  'm' => $request->get('modalidad'),
                                  'a' => intval($request->get('asignatura'))
                                 ));
            dd($results);
            dd(
                \DB::getQueryLog()
             );


            $encuesta = CEnc::where('year', '=', intval($year))->
                where(function ($q)  use ($user, $request, $docente_id){
                   $q->where('user_id', '=', $user->id)->
                   where('docente_id', '=', $docente_id)->
                   where('modalidad', '=', $request->get('modalidad'))->
                   where('asignatura', '=', intval($request->get('asignatura')));
                 })->get();


            //$sql = "select * from `cencs` where (`year` = %d) and (`user_id` = %d) and (`docente_id` = %d) and (`modalidad` = '%s') and (`asignatura` = %d)";

            //$sql = sprintf($sql,intval($year), $user->id, $docente_id, $request->get('modalidad'), intval($request->get('asignatura')));

            dd($sql);
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
