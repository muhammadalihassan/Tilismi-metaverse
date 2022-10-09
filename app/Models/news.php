<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $primaryKey = 'id';
  	protected $table = 'news';
    protected $guarded = [];  
    protected $fillable = [];

    public function user(){
    	return $this->belongsTo('App\Models\User', 'user_id' , 'id');
    }


}
