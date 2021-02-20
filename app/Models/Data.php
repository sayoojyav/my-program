<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table='datas';
    protected $fillable=[
    	'full_name',
    	'user_login',
    	'description',
    	'number_of_stars',
    	'notes'
    ];
}
