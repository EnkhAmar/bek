<?php

namespace Database\Seeders;

use App\Models\RelationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RelationTypeSeeder extends Seeder
{
    const DATA = [
        ["relation" => "husband"],
        ["relation" => "wife"],
        ["relation" => "father"],
        ["relation" => "mother"],
        ["relation" => "brother"],
        ["relation" => "sister"],
        ["relation" => "young_brother"],
        ["relation" => "young_sister"],
        ["relation" => "child"],
    ];

    const DATA1 = [
        ["relation" => "spouse"],
        ["relation" => "parent"],
        ["relation" => "brother/sister"],
        ["relation" => "child"],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(RelationTypeSeeder::DATA1 as $data) {
            RelationType::create([
                "relation" => $data["relation"]
            ]);
        }
    }
}
