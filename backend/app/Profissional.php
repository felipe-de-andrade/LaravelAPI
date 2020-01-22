<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $table = "profissionais";

    
    public function profissionais(){
        return $this->hasMany('App\Profissional', 'profissional_tec', 'profissionais_id', 'tecnologias_id');
    }
}
