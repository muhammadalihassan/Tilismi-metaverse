<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role_assign extends Model
{
    use HasFactory;
    protected $table = 'role_assign';
    protected $primaryKey = 'id';
    protected $fillable = ['role_id', 'assignee'];
}
