<?php

namespace App\Http\Controllers\Actividades;

use App\Http\Controllers\Controller;
use App\Http\Requests\Actividades\AsesorRequest;
use App\Models\Actividades\Asesor;

class AsesoresController extends Controller
{


    public function store(AsesorRequest $request)
    {

        if($request->id){
            $asesor = Asesor::findOrFail($request->id);
        }
        else{
            $asesor = new Asesor;
        }

        
        $asesor->fill($request->all());
        $asesor->save();

        return Response()->json($asesor, 200);

    }

    public function delete($id)
    {
        $asesor = Asesor::findOrFail($id);
        $asesor->delete();

        return Response()->json($asesor, 201);

    }
}
