<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "relation";
    protected $fillable = ["citizen_id", "related_citizen_id", "relation_type"];
}
