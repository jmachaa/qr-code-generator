<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diocese extends Model
{
  protected $table='dioceses';
  protected $fillable = ['title', 'name','status'];
}
