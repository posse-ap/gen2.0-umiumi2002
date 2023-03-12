<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Language extends Model
{
    protected $fillable =['study_time','language_name'];
    public $timestamps = false;
    

    public function webapp()
    {
        return $this->belongsToMany('App\Webapp');
    }

}
