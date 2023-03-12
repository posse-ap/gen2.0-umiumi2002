<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
  protected $fillable = ['content_name'];
  public $timestamps = false;
  

  public function webapps()
  {
      return $this->belongsToMany('App\Webapp');
  }
}
