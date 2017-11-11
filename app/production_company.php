<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class production_company extends Model
{
  /**
   *  The attributes that are mass assignable.
   *
   *  @var array
   */
  protected $fillable = ['name'];

  public function movies()
  {
    return $this->hasMany('App\movie');
  }
}
