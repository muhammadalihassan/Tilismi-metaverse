<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class config extends Model
{
 	protected $primaryKey = 'id';
  	protected $table = 'config';
    protected $guarded = [];  
}
