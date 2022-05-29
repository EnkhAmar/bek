<?php

namespace App\Models;

use Database\Factories\AppartmentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appartment extends Model
{
    use HasFactory;

    protected $table = "appartment";
    protected $fillable = [
        "name",
        "khoroo"
    ];
    public $timestamps = false;

    /**
	 * Create a new factory instance for the model.
	 *
	 * @return \Illuminate\Database\Eloquent\Factories\Factory
	 */
	protected static function newFactory()
	{
		return AppartmentFactory::new();
	}
}
