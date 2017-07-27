@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Formulario B, para  {{ $data->name }}
                    <p class="help-block">Los Datos, aun siendo registrado como el Nombre y el email deberá ser
                    cargado, puesto que cada formuario es independiente del usuario. Además usted es quien
                    confirma dichos datos, independientemente de los registros en Sec. Académica. </p>
                    <p class="help-block">Estimado docente
                        La confección de este informe anual permitirá nutrir de elementos de valoración al Comité de Control de Gestión de Carrera Docente establecidos por Resolución N°309/09 del Consejo Superior a efectos de emitir un dictamen acerca del desempeño académico, en el bienio, de los docentes que integran su equipo de trabajo. Su respuesta permitirá profundizar las fortalezas y corregir las debilidades que se detecten, siendo la meta a alcanzar el mejoramiento de la calidad y la excelencia académica.
                        A continuación encontrará un conjunto de enunciados que se valoran seleccionando la opción que corresponda.
                    </p>
                </div>
                <div class="panel-body">
                    @include('partials.errors')
                    {!! Form::open(['url' =>  route('sbenc', ['id' => $data->informante_id]),  'method' => 'post' ])  !!}

                    <div class="form-group">
                        <label for="year" class="control-label">Año</label>
                        <input class="form-control" readonly name="year" type="text" value="{{ $data->year }}" id="year">
                    </div>
                    <div class="form-group">
                        <label for="cuatrimestre" class="control-label">Cuatrimestre</label>
                        <input class="form-control" readonly name="cuatrimestre" type="text" value="{{ $data->cuatrimestre }}" id="cuatrimestre">
                    </div>
                    <div class="form-group">
                        <label for="departamento" class="control-label">Departamento</label>
                        <input class="form-control" readonly name="departamento" type="text" value="{{ $data->departamento }}" id="departamento">
                    </div>
                    <div class="form-group">
                        <label for="asignatura_name" class="control-label">Asignatura</label>
                        <input class="form-control" readonly name="asignatura_name" type="text" value="{{ $data->asignatura_name }}" id="asignatura_name">
                        <input type="hidden" value="{{ $data->asignatura }}" name="asignatura">
                        <input type="hidden" value="{{ $data->modalidad }}" name="modalidad">
                    </div>
                    <div class="form-group">
                        <label for="informante" class="control-label">Nombre del Profesor Informante</label>
                        <input class="form-control" readonly name="informante" type="text" value="{{ $data->informante }}" id="informante">
                        <input type="hidden" name="informante_id" value="{{ $data->informante_id }}">
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label">Nombre del Profesor sobre que se informa</label>
                        <input class="form-control" readonly name="name" type="text" value="{{ $data->name }}" id="name" required>
                        <input type="hidden" name="docente_id" value="{{ $data->docente_id }}">
                    </div>
                    <div class="form-group">
                        <label for="dedicacion" class="control-label">Dedicación del Profesor sobre que se informa</label>
                        <input class="form-control" name="dedicacion" type="text" value="" id="dedicacion" placeholder="Dedicación Profesor a Informar" required>
                    </div>
                    <div class="form-group">
                        <label for="dedicacion" class="control-label">Cargo del Profesor sobre que se informa</label>
                        <input class="form-control" name="cargo" type="text" value="" id="dedicacion" placeholder="Cargo Profesor a Informar" required>
                    </div>
                    <div class="form-group">
                        <label for="cargo" class="control-label">Caracter del Profesor sobre que se informa</label>
                        <input class="form-control" name="caracter" type="text" value="" id="caracter" placeholder="Caracter Profesor a Informar" required>
                    </div>
                    <label class="control-label">Preguntas</label>
                    <div class="label label-default"> Código de opciones: <strong>A = Siempre, B = Casi Siempre,
                                                      C = Algunas Veces, D = Casi Nunca, E = Nunca F = No tengo elementos para opinar y
                                                      G = No Corresponde.</strong></div>
                    <ul class="list-group">
                    <li class="list-group-item">
                    <div class="form-group" id="bp1">
                        <div class="col-md-9">El docente asiste a las reuniones de cátedra programadas</div>
                        <div class="col-md-3"><label>
                                <input type="radio" name="bp1" value="A">A
                            </label>
                            <label>
                                <input type="radio" name="bp1" value="B">B
                            </label>
                            <label>
                                <input type="radio" name="bp1" value="C">C
                            </label>
                            <label>
                                <input type="radio" name="bp1" value="D">D
                            </label>
                            <label>
                                <input type="radio" name="bp1" value="E">E
                            </label>
                            <label>
                                <input type="radio" name="bp1" value="F">F
                            </label>
                            <label>
                                <input type="radio" name="bp1" value="G" checked>G
                            </label></div>
                    </div>
                    </li>
                    <li class="list-group-item">
                    <div class="form-group" id="bp2">
                        <div class="col-md-9">El docente atiende las consultas en los horarios acordados oportunamente</div>
                        <div class="col-md-3"><label>
                                <input type="radio" name="bp2" value="A">A
                            </label>
                            <label>
                                <input type="radio" name="bp2" value="B">B
                            </label>
                            <label>
                                <input type="radio" name="bp2" value="C">C
                            </label>
                            <label>
                                <input type="radio" name="bp2" value="D">D
                            </label>
                            <label>
                                <input type="radio" name="bp2" value="E">E
                            </label>
                            <label>
                                <input type="radio" name="bp2" value="F">F
                            </label>
                            <label>
                                <input type="radio" name="bp2" value="G"checked>G
                            </label></div>
                    </div>
                    </li>
                    <li class="list-group-item">
                    <div class="form-group" id="bp3">
                        <div class="col-md-9">El docente participa en la confección de exámenes parciales y finales</div>
                        <div class="col-md-3"><label>
                                <input type="radio" name="bp3" value="A">A
                            </label>
                            <label>
                                <input type="radio" name="bp3" value="B">B
                            </label>
                            <label>
                                <input type="radio" name="bp3" value="C">C
                            </label>
                            <label>
                                <input type="radio" name="bp3" value="D">D
                            </label>
                            <label>
                                <input type="radio" name="bp3" value="E">E
                            </label>
                            <label>
                                <input type="radio" name="bp3" value="F">F
                            </label>
                            <label>
                                <input type="radio" name="bp3" value="G"checked>G
                            </label></div>
                    </div>
                    </li>
                    <li class="list-group-item">
                    <div class="form-group" id="bp4">
                        <div class="col-md-9">El docente concurre a los exámenes parciales y finales</div>
                        <div class="col-md-3"><label>
                                <input type="radio" name="bp4" value="A">A
                            </label>
                            <label>
                                <input type="radio" name="bp4" value="B">B
                            </label>
                            <label>
                                <input type="radio" name="bp4" value="C">C
                            </label>
                            <label>
                                <input type="radio" name="bp4" value="D">D
                            </label>
                            <label>
                                <input type="radio" name="bp4" value="E">E
                            </label>
                            <label>
                                <input type="radio" name="bp4" value="F">F
                            </label>
                            <label>
                                <input type="radio" name="bp4" value="G"checked>G
                            </label></div>
                    </div>
                    </li>
                    <li class="list-group-item">
                    <div class="form-group" id="bp5">
                        <div class="col-md-9">El docente participa en la corrección de los exámenes parciales y finales</div>
                        <div class="col-md-3"><label>
                                <input type="radio" name="bp5" value="A">A
                            </label>
                            <label>
                                <input type="radio" name="bp5" value="B">B
                            </label>
                            <label>
                                <input type="radio" name="bp5" value="C">C
                            </label>
                            <label>
                                <input type="radio" name="bp5" value="D">D
                            </label>
                            <label>
                                <input type="radio" name="bp5" value="E">E
                            </label>
                            <label>
                                <input type="radio" name="bp5" value="F">F
                            </label>
                            <label>
                                <input type="radio" name="bp5" value="G"checked>G
                            </label></div>
                    </div>
                    </li>
                    <li class="list-group-item">
                    <div class="form-group" id="bp6">
                        <div class="col-md-9">El trato del docente con el resto de integrantes de la cátedra es cordial</div>
                        <div class="col-md-3"><label>
                                <input type="radio" name="bp6" value="A">A
                            </label>
                            <label>
                                <input type="radio" name="bp6" value="B">B
                            </label>
                            <label>
                                <input type="radio" name="bp6" value="C">C
                            </label>
                            <label>
                                <input type="radio" name="bp6" value="D">D
                            </label>
                            <label>
                                <input type="radio" name="bp6" value="E">E
                            </label>
                            <label>
                                <input type="radio" name="bp6" value="F">F
                            </label>
                            <label>
                                <input type="radio" name="bp6" value="G"checked>G
                            </label></div>
                    </div>
                    </li>
                    <li class="list-group-item">
                    <div class="form-group" id="bp7">
                        <div class="col-md-9">El docente desarrolla las tareas que se le encomiendan</div>
                        <div class="col-md-3"><label>
                                <input type="radio" name="bp7" value="A">A
                            </label>
                            <label>
                                <input type="radio" name="bp7" value="B">B
                            </label>
                            <label>
                                <input type="radio" name="bp7" value="C">C
                            </label>
                            <label>
                                <input type="radio" name="bp7" value="D">D
                            </label>
                            <label>
                                <input type="radio" name="bp7" value="E">E
                            </label>
                            <label>
                                <input type="radio" name="bp7" value="F">F
                            </label>
                            <label>
                                <input type="radio" name="bp7" value="G"checked>G
                            </label></div>
                    </div>
                    </li>
                    <li class="list-group-item">
                    <div class="form-group" id="bp8">
                        <div class="col-md-9">El docente manifiesta interés por capacitarse en el ámbito pedagógico y/o disciplinar</div>
                        <div class="col-md-3"><label>
                                <input type="radio" name="bp8" value="A">A
                            </label>
                            <label>
                                <input type="radio" name="bp8" value="B">B
                            </label>
                            <label>
                                <input type="radio" name="bp8" value="C">C
                            </label>
                            <label>
                                <input type="radio" name="bp8" value="D">D
                            </label>
                            <label>
                                <input type="radio" name="bp8" value="E">E
                            </label>
                            <label>
                                <input type="radio" name="bp8" value="F">F
                            </label>
                            <label>
                                <input type="radio" name="bp8" value="G"checked>G
                            </label></div>
                    </div>
                    </li>
                    <li class="list-group-item">
                    <div class="form-group" id="bp9">
                        <div class="col-md-9">El docente ha participado en la confección de materiales para la asignatura</div>
                        <div class="col-md-3"><label>
                                <input type="radio" name="bp9" value="A">A
                            </label>
                            <label>
                                <input type="radio" name="bp9" value="B">B
                            </label>
                            <label>
                                <input type="radio" name="bp9" value="C">C
                            </label>
                            <label>
                                <input type="radio" name="bp9" value="D">D
                            </label>
                            <label>
                                <input type="radio" name="bp9" value="E">E
                            </label>
                            <label>
                                <input type="radio" name="bp9" value="F">F
                            </label>
                            <label>
                                <input type="radio" name="bp9" value="G"checked>G
                            </label></div>
                    </div>
                    </li>
                    <li class="list-group-item">
                    <div class="form-group" id="bp10">
                        <div class="col-md-9">El docente participa en la dirección o codirección y/o colaboración en la elaboración de trabajos finales, pasantías y/o tutorías</div>
                        <div class="col-md-3"><label>
                                <input type="radio" name="bp10" value="A">A
                            </label>
                            <label>
                                <input type="radio" name="bp10" value="B">B
                            </label>
                            <label>
                                <input type="radio" name="bp10" value="C">C
                            </label>
                            <label>
                                <input type="radio" name="bp10" value="D">D
                            </label>
                            <label>
                                <input type="radio" name="bp10" value="E">E
                            </label>
                            <label>
                                <input type="radio" name="bp10" value="F">F
                            </label>
                            <label>
                                <input type="radio" name="bp10" value="G"checked>G
                            </label></div>
                    </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group" id="bp11">
                            <div class="col-md-9">El docente participa en la formación de recursos humanos de la cátedra </div>
                            <div class="col-md-3"><label>
                                    <input type="radio" name="bp11" value="A">A
                                </label>
                                <label>
                                    <input type="radio" name="bp11" value="B">B
                                </label>
                                <label>
                                    <input type="radio" name="bp11" value="C">C
                                </label>
                                <label>
                                    <input type="radio" name="bp11" value="D">D
                                </label>
                                <label>
                                    <input type="radio" name="bp11" value="E">E
                                </label>
                                <label>
                                    <input type="radio" name="bp11" value="F">F
                                </label>
                                <label>
                                    <input type="radio" name="bp11" value="G"checked>G
                                </label></div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group" id="bp12">
                            <div class="col-md-9">El docente participa en proyectos de investigación o para el mejoramiento de la enseñanza</div>
                            <div class="col-md-3"><label>
                                    <input type="radio" name="bp12" value="A">A
                                </label>
                                <label>
                                    <input type="radio" name="bp12" value="B">B
                                </label>
                                <label>
                                    <input type="radio" name="bp12" value="C">C
                                </label>
                                <label>
                                    <input type="radio" name="bp12" value="D">D
                                </label>
                                <label>
                                    <input type="radio" name="bp12" value="E">E
                                </label>
                                <label>
                                    <input type="radio" name="bp12" value="F">F
                                </label>
                                <label>
                                    <input type="radio" name="bp12" value="G"checked>G
                                </label></div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group" id="bp13">
                            <div class="col-md-9">El docente manifiesta interés por actividades de extensión y prácticas socio-comunitarias</div>
                            <div class="col-md-3"><label>
                                    <input type="radio" name="bp13" value="A">A
                                </label>
                                <label>
                                    <input type="radio" name="bp13" value="B">B
                                </label>
                                <label>
                                    <input type="radio" name="bp13" value="C">C
                                </label>
                                <label>
                                    <input type="radio" name="bp13" value="D">D
                                </label>
                                <label>
                                    <input type="radio" name="bp13" value="E">E
                                </label>
                                <label>
                                    <input type="radio" name="bp13" value="F">F
                                </label>
                                <label>
                                    <input type="radio" name="bp13" value="G"checked>G
                                </label></div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group" id="bp14">
                            <div class="col-md-9">El docente participa en actividades de gestión, asesoramiento y/o gobierno universitario rentadas o ad-honorem</div>
                            <div class="col-md-3"><label>
                                    <input type="radio" name="bp14" value="A">A
                                </label>
                                <label>
                                    <input type="radio" name="bp14" value="B">B
                                </label>
                                <label>
                                    <input type="radio" name="bp14" value="C">C
                                </label>
                                <label>
                                    <input type="radio" name="bp14" value="D">D
                                </label>
                                <label>
                                    <input type="radio" name="bp14" value="E">E
                                </label>
                                <label>
                                    <input type="radio" name="bp14" value="F">F
                                </label>
                                <label>
                                    <input type="radio" name="bp14" value="G"checked>G
                                </label></div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group" id="bp15">
                            <div class="col-md-9">El docente participa en actividades institucionales (difusión de carreras, administración, coordinación de proyectos académicos, etc.) en el ámbito del Departamento y/o Facultad, rentadas o ad-honorem</div>
                            <div class="col-md-3"><label>
                                    <input type="radio" name="bp15" value="A">A
                                </label>
                                <label>
                                    <input type="radio" name="bp15" value="B">B
                                </label>
                                <label>
                                    <input type="radio" name="bp15" value="C">C
                                </label>
                                <label>
                                    <input type="radio" name="bp15" value="D">D
                                </label>
                                <label>
                                    <input type="radio" name="bp15" value="E">E
                                </label>
                                <label>
                                    <input type="radio" name="bp15" value="F">F
                                </label>
                                <label>
                                    <input type="radio" name="bp15" value="G"checked>G
                                </label></div>
                        </div>
                    </li>
                    </ul>
                    <label for="otras" class="control-label">Otros elementos de juicio que desee considerar</label>
                    <textarea class="form-control" placeholder="Otros elementos a Considerar" name="otras" cols="50" rows="5" id="otras"></textarea>

                    <a href="{{ route('ibenc') }}"<button class="btn btn-primary btn-sm">Volver</button> </a>
                    <button type="submit" class="btn btn-default glyphicon glyphicon-save">Grabar</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
