<?php

namespace App\Models\Ats;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Validator;

class Empresa extends Model {

    protected $table = 'at_empresas';
    public $errores;
    protected $fillable = [
        'at_id',
        'empresa_id'
    ];


    protected $appends = ['nombre', 'sector', 'img'];

    public function getNombreAttribute(){
        return $this->empresa()->pluck('nombre')->first();
    }

    public function getImgAttribute(){
        return $this->empresa()->pluck('img')->first();
    }

    public function getSectorAttribute(){
        return $this->empresa()->pluck('sector')->first();
    }

    public function empresa(){
        return $this->belongsTo('App\Models\Empresas\Empresa', 'empresa_id');
    }

    public function at() 
    {
        return $this->belongsTo('App\Models\At','at_id');
    }
        
}