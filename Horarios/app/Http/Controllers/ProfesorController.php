<?php

namespace Horarios\Http\Controllers;

use Illuminate\Http\Request;

//use Horarios\Http\Request;

use Horarios\Profesor;

use Illuminate\Support\Facades\Redirect;

use Horarios\Http\Requests\ProfesorFormRequest;

use DB;

class ProfesorController extends Controller
{
    public function __construct()
    {


    }

    //metodos asociados al tipo de ruta RESOURCE
    public function index(Request $request)
    {
    	if($request)
    	{
    		//quita epsacios al inicio y final, esto es para buscar
    		//el % hace que el texto se busque en ciualquier parte de la cadena
    		$query=trim($request->get('searchText')); 
    		$profesores=DB::table('profesor')->where('NOMBRE_PRO','LIKE','%'.$query.'%')
    		//->where('telefono','=','1')
    		->orderBy('NOMBRE_PRO','asc')
    		->paginate(7); 
    		return view('horario.profesor.index',["profesores"=>$profesores,"searchText"=>$query]);
    	}


    }

    public function create()
    {
    	return view("horario.profesor.create");
    	
    }

    public function store(ProfesorFormRequest $request)
    {//almacena el objeto del modelo profesor en nuestra tabla profesor de la bd
    	$profesor = new Profesor; //crea un nuevo modelo
    	$profesor->nombre=$request->get('nombre');
    	$profesor->telefono=$request->get('telefono');
    	$profesor->correo=$request->get('correo');
    	$profesor->estado='1';
    	$profesor->save();
    	return Redirect::to('horario/profesor');

    	
    }

    public function show($id)
    {
    	return view("horario.profesor.show",["profesor"=>Profesor::findOrFail($id)]);
    }

    public function edit($id)
    {
    	return view("horario.profesor.edit",["profesor"=>Profesor::findOrFail($id)]);
    	
    }

    public function update(ProfesorFormRequest $request,$id)
    {
    	$profesor=Profesor::findOrFail($id);
    	$profesor->nombre=$request->get('nombre');
    	$profesor->telefono=$request->get('telefono');
    	//$profesor->correo=$correo->get('correo');
    	$profesor->update();
    	return Redirect::to('horario/profesor');
    		
    }

    public function destroy($id)
    {
    	$profesor=Profesor::findOrFail($id);
    	$profesor->estado='0';
    	$profesor->update();
    	return Redirect::to('horario/profesor');
    	
    }

    
}
