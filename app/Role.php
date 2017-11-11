<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Role extends Pivot
{
  protected $fillable = ['character_name', 'base_pay', 'revenue_share'];

  protected $table = 'roles';

  public function salary(int $movie_income){
    return $this->base_pay + ($this->revenue_share / 100) * $movie_income;
  }

  public function movie()
  {
    return $this->belongsTo('App\Movie');
  }

  public function actor()
  {
    return $this->belongsTo('App\Actor');
  }
}
