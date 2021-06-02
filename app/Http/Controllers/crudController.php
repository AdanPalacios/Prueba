<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AlumnoModel;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCreateRequest;
use App\Http\Requests\ItemUpdateRequest;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;

use App\Http\Requests\FormRequest;

class crudController extends Controller
{
    public function store(FormRequest $request)
    {
        // Instancio al modelo Jugos que hace llamado a la tabla 'jugos' de la Base de Datos
      
        $id = iniqid();
        $alumno = new AlumnoModel(array(
            'nombre' => $request->get('nombre'),
            'apellidos'=> $request->get('apellidos'),
            'edad'=> $request->get('edad'),
            'id' => $id

        ));
        // Recibo todos los datos del formulario de la vista 'crear.blade.php'

        // Inserto todos los datos en mi tabla 'jugos' 
        $alumno->save();
        
        // Hago una redirección a la vista principal con un mensaje 
        return redirect('admin/alumno')->with('message','Guardado Satisfactoriamente !');
    }
    public function crear()
        {
            $alumno = AlumnoModel::all();
            return view('admin.alumno.crear', compact('alumno'));
        }

        public function index()
    {
        $alumno = alumno::all();
        return view('admin.alumno.home', compact('alumno')); 
    }

    public function actualizar($id)
{
    $alumno = alumno::find($id);
    return view('admin/alumno.actualizar',['alumno'=>$alumno]);
}
// Proceso de Actualización de un Registro (Update)
 
public function update(ItemUpdateRequest $request, $id)
{        
    // Recibo todos los datos desde el formulario Actualizar
    $alumno = alumno::find($id);
    $alumno->nombre = $request->nombre;
    $alumno->apellidos = $request->apellidos;
    $alumno->edad = $request->edad;
    $alumno->email = $request->email;
    $alumno->telefono = $request->telefono;
 
   
    // Actualizo los datos en la tabla 'jugos'
    $alumno->save();
 
    // Muestro un mensaje y redirecciono a la vista principal 
    Session::flash('message', 'Editado Satisfactoriamente !');
    return Redirect::to('admin/alumno');
}

// Eliminar un Registro
 
public function eliminar($id)
{
    // Indicamos el 'id' del registro que se va Eliminar
    $alumno = alumno::find($id);
 
    // Elimino el registro de la tabla 'jugos' 
    alumno::destroy($id);
        
    // Muestro un mensaje y redirecciono a la vista principal 
    Session::flash('message', 'Eliminado Satisfactoriamente !');
    return Redirect::to('admin/alumno');
}

}
