<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class attenda extends Model
{
    protected $table = 'attenda';
	public $primaryKey = 'id';
    protected $fillable = [
    	'is_active','is_deleted'
    ];
}
