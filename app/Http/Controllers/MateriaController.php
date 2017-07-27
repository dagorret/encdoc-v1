<?php


namespace EncDoc\Http\Controllers;

use EncDoc\Materia;
use EncDoc\User;
use Illuminate\Http\Request;

use EncDoc\Http\Requests;
use Illuminate\Support\Facades\Auth;


class MateriaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $materias = Materia::orderBy('codigo')->paginate();
        return view('materias/index', compact('materias'));
    }
    
}