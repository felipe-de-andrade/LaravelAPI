<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tecnologia extends Model
{
    protected $table = "tecnollogias";

    public function profissionais(){
        return $this->belogsToMany('App\Profissional', 'profissional_tec', 'tecnologias_id', 'profissionais_id');
    }
};
