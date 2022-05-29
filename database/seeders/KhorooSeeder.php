<?php

namespace Database\Seeders;

use App\Models\Khoroo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KhorooSeeder extends Seeder
{
    const DATA = [
        ["name" => "1-r khoroo"],
        ["name" => "2-r khoroo"],
        ["name" => "3-r khoroo"],
        ["name" => "4-r khoroo"],
        ["name" => "5-r khoroo"],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (KhorooSeeder::DATA as $data) {
            Khoroo::create([
                "name" => $data["name"],
            ]);
        }
    }
}
