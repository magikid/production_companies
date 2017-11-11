<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Role extends Pivot
{
  protected $fillable = ['character_name', 'base_pay', 'revenue_share'];

  protected $table = 'roles';

  public function movie()
  {
    return $this->belongsTo('App\Movie');
  }

  public function actor()
  {
    return $this->belongsTo('App\Actor');
  }
}
