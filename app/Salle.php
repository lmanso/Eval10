<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
       public function status()
  {
      return $this->belongsTo('App\Status');
  }
    public function positions()
  {
      return $this->belongsToMany('App\Positions');
  }}
