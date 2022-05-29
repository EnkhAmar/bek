<?php

namespace Database\Seeders;

use App\Models\Appartment;
use App\Models\Khoroo;
use Database\Factories\AppartmentFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppartmentSeeder extends Seeder
{   
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $khoroos = Khoroo::all();
        foreach ($khoroos as $khoroo) {
            Appartment::factory(5)->create([
                "khoroo" => $khoroo->id,
            ]);
        }
    }
}
