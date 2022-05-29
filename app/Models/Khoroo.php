<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khoroo extends Model
{
    use HasFactory;
    
    protected $table = "khoroo";
	protected $fillable = [
		"name",
	];
    public $timestamps = false;

}
