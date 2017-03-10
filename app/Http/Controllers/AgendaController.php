<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contactos;
use Auth;
use Session;
use Redirect;
use App\User;
use App\Http\Controllers\Auth\AuthController;
class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario    = User::find(Auth::user()->id);
        $contactos  = $usuario->contactos;
        return view('agenda.index',compact('contactos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Contactos::create([
           'nombre'     => $request['nombre'],
           'apellidos'  => $request['apellidos'],
           'telefono'   => $request['telefono'],
           'email'      => $request['email'],
           'direccion'  => $request['direccion'],
        ]);

        Session::flash('message','Contacto creado correctamente');
        return Redirect::to('/agenda');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Agenda::find($id);
        return view('CRUD.show',compact('book'));

    }

    public function edit($id)
    {
        $contacto = Contactos::find($id);
        return view('agenda.edit',compact('contacto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contacto = Contactos::find($id);
        $contacto->fill($request->all());
        $contacto->save();

        Session::flash('message','Contacto actualizado correctamente');
        return redirect('/agenda');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contacto = Contactos::find($id);
        $contacto->delete();
        Session::flash('message','Contacto eliminado correctamente');
        return redirect('/agenda');
    }
}
