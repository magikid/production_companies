<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  protected $fillable = ['name', 'release_date', 'income', 'expense'];

  public function production_company()
  {
    return $this->belongsTo('App\production_company');
  }
}
