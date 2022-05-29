<?php

namespace App\Models;

use Database\Factories\CitizenFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "citizen";
    protected $fillable = [
        "register_number",
        "last_name",
        "first_name",
        "gender",
        "dob",
        "family",
    ];

    protected static function newFactory()
    {
        return CitizenFactory::new();
    }
}
