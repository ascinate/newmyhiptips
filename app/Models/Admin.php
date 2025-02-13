<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
   use HasFactory;

    protected $table = 'admin_master'; 

    protected $primaryKey = 'id'; 

    public $timestamps = false; 

    protected $fillable = ['username', 'email', 'password']; 

    protected $hidden = ['password']; 
}
