<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    public function todos(){
    return $this->hasMany('App\Todo','user_id');
}

public function user(){
  return $this->belongsTo('App\User');
}
}
