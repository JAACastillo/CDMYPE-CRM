<?php

namespace App\Http\Controllers\Empresas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresas\Empresa;
use Illuminate\Support\Facades\Storage;

class EmpresasController extends Controller
{
	

	public function index() {
	   
		$empresas = Empresa::orderBy('id','dsc')->paginate(7);

		return Response()->json($empresas, 200);

	}


	public function read($id) {

		$empresa = Empresa::where('id', $id)->with('empresarios.empresario','productos', 'indicadores', 'proyectos.acciones', 'proyectos.asesor')->firstOrFail();
		return Response()->json($empresa, 200);

	}


	public function store(Request $request)
	{

		$request->validate([
		    //'file'       	=>'required',
			'nombre'        =>'required',
			'direccion'		=>'required',
			'municipio' 	=>'required',
			'departamento'  =>'required',
			
		]);

		if($request->id)
		    $empresa = Empresa::findOrFail($request->id);
		else
		    $empresa = new Empresa;
		
			$empresa->fill($request->all());
			if ($request->hasFile('file')) {
				if ($request->id && $empresa->img) {
					Storage::delete($empresa->img);
				}
			   $nombre = $request->file->store('/img');
			   $empresa->img = $nombre;
			}
		$empresa->save();

		return Response()->json($empresa, 200);

	}

	public function delete($id)
	{
		$empresa = Empresa::findOrFail($id);
		$empresa->delete();

		return Response()->json($empresa, 201);

	}

	public function search($txt) {

		$empresas = Empresa::where('nombre', 'like' ,'%' . $txt . '%')->paginate(7);
		return Response()->json($empresas, 200);

	}

}
