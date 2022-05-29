<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "family";
    protected $fillable = ["appartment", "door", "goodman"];

    public function citizens()
    {
        return $this->hasMany(Citizen::class, "family", "id");
    }
}
