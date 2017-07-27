<?php

namespace EncDoc\Http\Controllers;

use EncDoc\User;
use Illuminate\Http\Request;

use EncDoc\Http\Requests;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * List all Users
     */
    public function index()
    {
        if (Auth::user()->admin) {
            $users = User::orderBy('name')->paginate();
            return view('users/index', compact('users'));

        } else {

            return redirect('/home');
        }
    }

    public function create()
    {
        if (Auth::user()->admin) {
            return view('users.create');
        } else {
            return redirect('/home');
        }

    }

    public function getsearch()
    {
        return view('users.search');
    }

    public function postsearch(Request $request)
    {
        $users = User::where('name', 'LIKE', '%' . $request->name . '%')->paginate();
        //dd($users);
        return view('users/index', compact('users'));
    }

    public function show(){

    }

    public function store(Request $request) {

        if (! Auth::user()->admin)
            return redirect('/home');


        /*
        $rules = array(
            'name'             => 'required',                        // just a normal required validation
            'email'            => 'required|email|unique:users',     // required and must be unique in the ducks table
            'password'         => 'required',
            'dni' => 'required|same:password'           // required and has to match the password field
        );
        */
        $rules = [ 'name'      => ['required', 'max:50'],
                    'email'    => ['required', 'email', 'unique:users'],
                    'password' => ['required', 'min:6',
                                   'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'],
                    'dni'      => ['required', 'numeric','digits_between:8,8']
                 ];

        $this->validate($request,$rules);

        //dd($request->all());
        $password = $request->password;

        $uservalid = new User;
        $uservalid->name = $request->name;
        $uservalid->email = $request->email;
        $uservalid->password = bcrypt($password);
        $uservalid->dni = $request->dni;
        $uservalid->admin = false;

        \Session::flash('flash_message', "Usuario : " . $uservalid->name . " Agregado correctamente");

        $uservalid->save();

        return redirect( route('users.index'));
    }
    
    public function edit($id)
    {

        if (! \Auth::user()->admin) {
            return redirect('/home');
        }

        $user = User::findOrFail($id);

        
        if(is_null($user)){
            return redirect( route('users.index'));
        }

        return view('users.edit', compact('user'));
    }

    public function update($id, Request $request)
    {
        if (! \Auth::user()->admin)
            return redirect('/home');

        $user = User::findOrFail($id);

        $rules = [ 'name'     => ['required', 'max:50'],
                   'email'    => ['required', 'email'],
                   'password' => ['min:6',
                                 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'],
                   'dni'      => ['required', 'numeric','digits_between:8,8']
        ];

        $this->validate($request,$rules);

        $password = $request->password;

        $user->name = $request->name;
        $user->email = $request->email;

        if ($password != "") {
            $user->password = bcrypt($password);
        }

        $user->dni = $request->dni;

        $user->save();

        \Session::flash('flash_message', 'Registro actualizado exitósamente');

        return \Redirect::route('users.index');
    }

    public function destroy($id, Request $request)
    {
        if (! \Auth::user()->admin) {
            return redirect('/home');
        }


        $user = User::findOrFail($id);

        $message = $user->name . ' fue eliminado';

        $user->delete();

        if ($request->ajax()) {
            return \Response::json([
                'id' => $user->id,
                'message' => $message
            ]);
        }
        \Session::flash('message',$message);
        return \Redirect::route('users.index');
    }
}