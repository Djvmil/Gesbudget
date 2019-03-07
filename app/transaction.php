<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
  protected $fillable = [
      'date', 'type', 'montant', 'description', 'idUser'
  ];



  public function user ()
  {
          return $this->hasMany('App\User','id','idUser');    //model que tu veux joindre et clé
  }
/*
  public function users()
    {
        return $this->hasMany(App\User::class);
    }*/
}
