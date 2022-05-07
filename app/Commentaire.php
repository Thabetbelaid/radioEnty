<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Commentaire extends Model
{
  protected $fillable = ['name', 'email', 'message'];  
}
