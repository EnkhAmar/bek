<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelationType extends Model
{
    use HasFactory;
    protected $table = "relation_type";
    protected $fillable = [
        "relation"
    ];
    public $timestamps = false;


}
