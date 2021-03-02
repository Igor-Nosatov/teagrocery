<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
  protected $table = 'subscribes';
  
  protected $fillable = [
      'email', 'user_id'
  ];

  public function users() 
  {
      return $this->belongsTo(User::class, 'user_id');
  }
}
