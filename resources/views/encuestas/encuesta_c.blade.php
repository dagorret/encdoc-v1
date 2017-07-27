@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Formulario C, para  {{ $data->name }}
                    <p class="help-block">Llene los datos y guardela. Luego podrá imprimirla.  </p>
                    <p class="help-block">Estimado docente:
                        Esta encuesta se realiza para conocer el desempeño del Docente Responsable en el ámbito de la cátedra a la cual pertenece. Su respuesta permitirá profundizar las fortalezas y corregir las debilidades que se detecten, siendo la meta a alcanzar el mejoramiento de la calidad y la excelencia académica.
                        A continuación encontrará un conjunto de enunciados que se valoran seleccionando la opción que corresponda
                    </p>
                </div>
                <div class="panel-body">
                    @include('partials.errors')
                    {!! Form::open(['url' =>  route('scenc', ['id' => $data->user_id]),  'method' => 'post' ])  !!}

                    <div class="form-group">
                        <label for="year" class="control-label">Año</label>
                        <input class="form-control" readonly name="year" type="text" value="{{ $data->year }}" id="year">
                    </div>
                    <div class="form-group">
                        <label for="cuatrimestre" class="control-label">Cuatrimestre</label>
                        <input class="form-control" readonly name="cuatrimestre" type="text" value="{{ $data->cuatrimestre }}" id="cuatrimestre">
                    </div>
                    <div class="form-group">
                        <label for="asignatura_name" class="control-label">Asignatura</label>
                        <input class="form-control" readonly name="asignatura_name" type="text" value="{{ $data->asignatura_name }}" id="asignatura_name">
                        <input type="hidden" value="{{ $data->asignatura }}" name="asignatura">
                        <input type="hidden" value="{{ $data->modalidad }}" name="modalidad">
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label">Nombre del Profesor sobre que se informa</label>
                        <input class="form-control" readonly name="name" type="text" value="{{ $data->name }}" id="name" required>
                        <input type="hidden" name="docente_id" value="{{ $data->docente_id }}">
                    </div>
                    <label class="control-label">Preguntas</label>
                    <div class="label label-default"> Código de opciones: <strong>A = Siempre, B = Casi Siempre,
                                                      C = Algunas Veces, D = Casi Nunca, E = Nunca F = No tengo elementos para opinar y
                                                      G = No Corresponde.</strong></div>
                    <ul class="list-group">
                    <li class="list-group-item">
                    <div class="form-group" id="cp1">
                        <div class="col-md-9">El Docente Responsable otorga espacios de participación a los diferentes integrantes del equipo de cátedra</div>
                        <div class="col-md-3"><label>
                                <input type="radio" name="cp1" value="A">A
                            </label>
                            <label>
                                <input type="radio" name="cp1" value="B">B
                            </label>
                            <label>
                                <input type="radio" name="cp1" value="C">C
                            </label>
                            <label>
                                <input type="radio" name="cp1" value="D">D
                            </label>
                            <label>
                                <input type="radio" name="cp1" value="E">E
                            </label>
                            <label>
                                <input type="radio" name="cp1" value="F">F
                            </label>
                            <label>
                                <input type="radio" name="cp1" value="G" checked>G
                            </label></div>
                    </div>
                    </li>
                    <li class="list-group-item">
                    <div class="form-group" id="cp2">
                        <div class="col-md-9">El Docente Responsable planifica las actividades y establece un cronograma de realización durante el cuatrimestre. </div>
                        <div class="col-md-3"><label>
                                <input type="radio" name="cp2" value="A">A
                            </label>
                            <label>
                                <input type="radio" name="cp2" value="B">B
                            </label>
                            <label>
                                <input type="radio" name="cp2" value="C">C
                            </label>
                            <label>
                                <input type="radio" name="cp2" value="D">D
                            </label>
                            <label>
                                <input type="radio" name="cp2" value="E">E
                            </label>
                            <label>
                                <input type="radio" name="cp2" value="F">F
                            </label>
                            <label>
                                <input type="radio" name="cp2" value="G"checked>G
                            </label></div>
                    </div>
                    </li>
                    <li class="list-group-item">
                    <div class="form-group" id="cp3">
                        <div class="col-md-9">El Docente Responsable  pone en consideración del resto de los integrantes de la cátedra el programa de la asignatura.</div>
                        <div class="col-md-3"><label>
                                <input type="radio" name="cp3" value="A">A
                            </label>
                            <label>
                                <input type="radio" name="cp3" value="B">B
                            </label>
                            <label>
                                <input type="radio" name="cp3" value="C">C
                            </label>
                            <label>
                                <input type="radio" name="cp3" value="D">D
                            </label>
                            <label>
                                <input type="radio" name="cp3" value="E">E
                            </label>
                            <label>
                                <input type="radio" name="cp3" value="F">F
                            </label>
                            <label>
                                <input type="radio" name="cp3" value="G"checked>G
                            </label></div>
                    </div>
                    </li>
                    <li class="list-group-item">
                    <div class="form-group" id="cp4">
                        <div class="col-md-9">El Docente Responsable asigna tareas entre los integrantes en función de la dedicación de cada uno4</div>
                        <div class="col-md-3"><label>
                                <input type="radio" name="cp4" value="A">A
                            </label>
                            <label>
                                <input type="radio" name="cp4" value="B">B
                            </label>
                            <label>
                                <input type="radio" name="cp4" value="C">C
                            </label>
                            <label>
                                <input type="radio" name="cp4" value="D">D
                            </label>
                            <label>
                                <input type="radio" name="cp4" value="E">E
                            </label>
                            <label>
                                <input type="radio" name="cp4" value="F">F
                            </label>
                            <label>
                                <input type="radio" name="cp4" value="G"checked>G
                            </label></div>
                    </div>
                    </li>
                    <li class="list-group-item">
                    <div class="form-group" id="cp5">
                        <div class="col-md-9">El Docente Responsable  cumple con los horarios de consultas</div>
                        <div class="col-md-3"><label>
                                <input type="radio" name="cp5" value="A">A
                            </label>
                            <label>
                                <input type="radio" name="cp5" value="B">B
                            </label>
                            <label>
                                <input type="radio" name="cp5" value="C">C
                            </label>
                            <label>
                                <input type="radio" name="cp5" value="D">D
                            </label>
                            <label>
                                <input type="radio" name="cp5" value="E">E
                            </label>
                            <label>
                                <input type="radio" name="cp5" value="F">F
                            </label>
                            <label>
                                <input type="radio" name="cp5" value="G"checked>G
                            </label></div>
                    </div>
                    </li>
                    <li class="list-group-item">
                    <div class="form-group" id="cp6">
                        <div class="col-md-9">El Docente Responsable lo incentiva a que inicie o continúe un proceso de capacitación disciplinar y/o pedagógica</div>
                        <div class="col-md-3"><label>
                                <input type="radio" name="cp6" value="A">A
                            </label>
                            <label>
                                <input type="radio" name="cp6" value="B">B
                            </label>
                            <label>
                                <input type="radio" name="cp6" value="C">C
                            </label>
                            <label>
                                <input type="radio" name="cp6" value="D">D
                            </label>
                            <label>
                                <input type="radio" name="cp6" value="E">E
                            </label>
                            <label>
                                <input type="radio" name="cp6" value="F">F
                            </label>
                            <label>
                                <input type="radio" name="cp6" value="G"checked>G
                            </label></div>
                    </div>
                    </li>
                    <li class="list-group-item">
                    <div class="form-group" id="cp7">
                        <div class="col-md-9">El ambiente de trabajo de la cátedra generado por el Docente Responsable es cordial</div>
                        <div class="col-md-3"><label>
                                <input type="radio" name="cp7" value="A">A
                            </label>
                            <label>
                                <input type="radio" name="cp7" value="B">B
                            </label>
                            <label>
                                <input type="radio" name="cp7" value="C">C
                            </label>
                            <label>
                                <input type="radio" name="cp7" value="D">D
                            </label>
                            <label>
                                <input type="radio" name="cp7" value="E">E
                            </label>
                            <label>
                                <input type="radio" name="cp7" value="F">F
                            </label>
                            <label>
                                <input type="radio" name="cp7" value="G"checked>G
                            </label></div>
                    </div>
                    </li>
                    <li class="list-group-item">
                    <div class="form-group" id="cp8">
                        <div class="col-md-9">El Docente Responsable trata a los integrantes de la cátedra con respeto</div>
                        <div class="col-md-3"><label>
                                <input type="radio" name="cp8" value="A">A
                            </label>
                            <label>
                                <input type="radio" name="cp8" value="B">B
                            </label>
                            <label>
                                <input type="radio" name="cp8" value="C">C
                            </label>
                            <label>
                                <input type="radio" name="cp8" value="D">D
                            </label>
                            <label>
                                <input type="radio" name="cp8" value="E">E
                            </label>
                            <label>
                                <input type="radio" name="cp8" value="F">F
                            </label>
                            <label>
                                <input type="radio" name="cp8" value="G"checked>G
                            </label></div>
                    </div>
                    </li>
                    <li class="list-group-item">
                    <div class="form-group" id="cp9">
                        <div class="col-md-9">El Docente Responsable desarrolla las tareas que le corresponden en función de su dedicación</div>
                        <div class="col-md-3"><label>
                                <input type="radio" name="cp9" value="A">A
                            </label>
                            <label>
                                <input type="radio" name="cp9" value="B">B
                            </label>
                            <label>
                                <input type="radio" name="cp9" value="C">C
                            </label>
                            <label>
                                <input type="radio" name="cp9" value="D">D
                            </label>
                            <label>
                                <input type="radio" name="cp9" value="E">E
                            </label>
                            <label>
                                <input type="radio" name="cp9" value="F">F
                            </label>
                            <label>
                                <input type="radio" name="cp9" value="G"checked>G
                            </label></div>
                    </div>
                    </li>
                    <li class="list-group-item">
                    <div class="form-group" id="cp10">
                        <div class="col-md-9">El Docente Responsable acuerda la metodología de trabajo para abordar un tema en particular</div>
                        <div class="col-md-3"><label>
                                <input type="radio" name="cp10" value="A">A
                            </label>
                            <label>
                                <input type="radio" name="cp10" value="B">B
                            </label>
                            <label>
                                <input type="radio" name="cp10" value="C">C
                            </label>
                            <label>
                                <input type="radio" name="cp10" value="D">D
                            </label>
                            <label>
                                <input type="radio" name="cp10" value="E">E
                            </label>
                            <label>
                                <input type="radio" name="cp10" value="F">F
                            </label>
                            <label>
                                <input type="radio" name="cp10" value="G"checked>G
                            </label></div>
                    </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group" id="cp11">
                            <div class="col-md-9">El Docente Responsable muestra preparación en los nuevos conocimientos de la disciplina</div>
                            <div class="col-md-3"><label>
                                    <input type="radio" name="cp11" value="A">A
                                </label>
                                <label>
                                    <input type="radio" name="cp11" value="B">B
                                </label>
                                <label>
                                    <input type="radio" name="cp11" value="C">C
                                </label>
                                <label>
                                    <input type="radio" name="cp11" value="D">D
                                </label>
                                <label>
                                    <input type="radio" name="cp11" value="E">E
                                </label>
                                <label>
                                    <input type="radio" name="cp11" value="F">F
                                </label>
                                <label>
                                    <input type="radio" name="cp11" value="G"checked>G
                                </label></div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group" id="cp12">
                            <div class="col-md-9">El Docente Responsable comparte con los integrantes del equipo de cátedra los nuevos conocimientos adquiridos</div>
                            <div class="col-md-3"><label>
                                    <input type="radio" name="cp12" value="A">A
                                </label>
                                <label>
                                    <input type="radio" name="cp12" value="B">B
                                </label>
                                <label>
                                    <input type="radio" name="cp12" value="C">C
                                </label>
                                <label>
                                    <input type="radio" name="cp12" value="D">D
                                </label>
                                <label>
                                    <input type="radio" name="cp12" value="E">E
                                </label>
                                <label>
                                    <input type="radio" name="cp12" value="F">F
                                </label>
                                <label>
                                    <input type="radio" name="cp12" value="G"checked>G
                                </label></div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group" id="cp13">
                            <div class="col-md-9">El Docente Responsable incorpora nueva bibliografía</div>
                            <div class="col-md-3"><label>
                                    <input type="radio" name="cp13" value="A">A
                                </label>
                                <label>
                                    <input type="radio" name="cp13" value="B">B
                                </label>
                                <label>
                                    <input type="radio" name="cp13" value="C">C
                                </label>
                                <label>
                                    <input type="radio" name="cp13" value="D">D
                                </label>
                                <label>
                                    <input type="radio" name="cp13" value="E">E
                                </label>
                                <label>
                                    <input type="radio" name="cp13" value="F">F
                                </label>
                                <label>
                                    <input type="radio" name="cp13" value="G"checked>G
                                </label></div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group" id="cp14">
                            <div class="col-md-9">El Docente Responsable desarrolla materiales para la asignatura</div>
                            <div class="col-md-3"><label>
                                    <input type="radio" name="cp14" value="A">A
                                </label>
                                <label>
                                    <input type="radio" name="cp14" value="B">B
                                </label>
                                <label>
                                    <input type="radio" name="cp14" value="C">C
                                </label>
                                <label>
                                    <input type="radio" name="cp14" value="D">D
                                </label>
                                <label>
                                    <input type="radio" name="cp14" value="E">E
                                </label>
                                <label>
                                    <input type="radio" name="cp14" value="F">F
                                </label>
                                <label>
                                    <input type="radio" name="cp14" value="G"checked>G
                                </label></div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group" id="cp15">
                            <div class="col-md-9">El Docente Responsable comparte la producción de materiales con algún integrante del equipo de trabajo</div>
                            <div class="col-md-3"><label>
                                    <input type="radio" name="cp15" value="A">A
                                </label>
                                <label>
                                    <input type="radio" name="cp15" value="B">B
                                </label>
                                <label>
                                    <input type="radio" name="cp15" value="C">C
                                </label>
                                <label>
                                    <input type="radio" name="cp15" value="D">D
                                </label>
                                <label>
                                    <input type="radio" name="cp15" value="E">E
                                </label>
                                <label>
                                    <input type="radio" name="cp15" value="F">F
                                </label>
                                <label>
                                    <input type="radio" name="cp15" value="G"checked>G
                                </label></div>
                        </div>
                    </li>
                        <li class="list-group-item">
                            <div class="form-group" id="cp16">
                                <div class="col-md-9">El Docente Responsable convoca a reuniones de cátedra</div>
                                <div class="col-md-3"><label>
                                        <input type="radio" name="cp16" value="A">A
                                    </label>
                                    <label>
                                        <input type="radio" name="cp16" value="B">B
                                    </label>
                                    <label>
                                        <input type="radio" name="cp16" value="C">C
                                    </label>
                                    <label>
                                        <input type="radio" name="cp16" value="D">D
                                    </label>
                                    <label>
                                        <input type="radio" name="cp16" value="E">E
                                    </label>
                                    <label>
                                        <input type="radio" name="cp16" value="F">F
                                    </label>
                                    <label>
                                        <input type="radio" name="cp16" value="G"checked>G
                                    </label></div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group" id="cp17">
                                <div class="col-md-9">El Docente Responsable acuerda con el equipo de cátedra una forma de trabajo y lo mantiene durante el cuatrimestre</div>
                                <div class="col-md-3"><label>
                                        <input type="radio" name="cp17" value="A">A
                                    </label>
                                    <label>
                                        <input type="radio" name="cp17" value="B">B
                                    </label>
                                    <label>
                                        <input type="radio" name="cp17" value="C">C
                                    </label>
                                    <label>
                                        <input type="radio" name="cp17" value="D">D
                                    </label>
                                    <label>
                                        <input type="radio" name="cp17" value="E">E
                                    </label>
                                    <label>
                                        <input type="radio" name="cp17" value="F">F
                                    </label>
                                    <label>
                                        <input type="radio" name="cp17" value="G"checked>G
                                    </label></div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group" id="cp18">
                                <div class="col-md-9">El Docente Responsable utiliza los medios de comunicación para contactarse con los integrantes de su equipo</div>
                                <div class="col-md-3"><label>
                                        <input type="radio" name="cp18" value="A">A
                                    </label>
                                    <label>
                                        <input type="radio" name="cp18" value="B">B
                                    </label>
                                    <label>
                                        <input type="radio" name="cp18" value="C">C
                                    </label>
                                    <label>
                                        <input type="radio" name="cp18" value="D">D
                                    </label>
                                    <label>
                                        <input type="radio" name="cp18" value="E">E
                                    </label>
                                    <label>
                                        <input type="radio" name="cp18" value="F">F
                                    </label>
                                    <label>
                                        <input type="radio" name="cp18" value="G"checked>G
                                    </label></div>
                            </div>
                        </li>
                    </ul>

                    <a href="{{ route('icenc') }}"<button class="btn btn-primary btn-sm">Volver</button> </a>
                    <button type="submit" class="btn btn-default glyphicon glyphicon-save">Grabar</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
