<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
  #
  # This is the attribute that can be mass-assigned.
  #
  protected $fillable = ['name'];

  public function movies()
  {
    return $this->belongsToMany('App\Movie', 'roles')
      ->as('role')
      ->withPivot('character_name', 'base_pay', 'revenue_share', 'id')
      ->withTimestamps()
      ->using('App\Role');
  }
}
