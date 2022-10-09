<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sessions extends Model
{
    protected $table = 'sessions';
	public $primaryKey = 'id';
    protected $fillable = [
    	'is_active','is_deleted'
    ];
}
