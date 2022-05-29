<?php

namespace Database\Seeders;

use App\Models\Appartment;
use App\Models\Citizen;
use App\Models\Family;
use App\Models\Relation;
use App\Models\RelationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitizenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Family::create([
            "appartment" => Appartment::inRandomOrder()->first()->id,
            "door" => 30,
            "goodman" => 2,
        ]);
        
        Citizen::create([
            "register_number" => "ZK01212152",
            "last_name" => "Battumur",
            "first_name" => "Bilguudei",
            "gender" => "male",
            "dob" => "2001-01-21",
            "family" => 1,
        ]);

        Citizen::create([
            "register_number" => "ZK74212152",
            "last_name" => "Ravjaa",
            "first_name" => "Battumur",
            "gender" => "male",
            "dob" => "1974-11-07",
            "family" => 1,
        ]);

        Citizen::create([
            "register_number" => "ZK73212152",
            "last_name" => "Dorj",
            "first_name" => "Mendsaikhan",
            "gender" => "female",
            "dob" => "1973-09-11",
            "family" => 1,
        ]);

        Citizen::create([
            "register_number" => "ZK07212152",
            "last_name" => "Battumur",
            "first_name" => "Anujin",
            "gender" => "female",
            "dob" => "2007-04-10",
            "family" => 1,
        ]);


        // Citizen::factory()->count(5)->create();

        Relation::create([
            "citizen_id" => 1,
            "related_citizen_id" => 2,
            "relation_type" => RelationType::where("relation", "parent")->first()->id,
        ]);

        Relation::create([
            "citizen_id" => 1,
            "related_citizen_id" => 3,
            "relation_type" => RelationType::where("relation", "parent")->first()->id,
        ]);
        
        Relation::create([
            "citizen_id" => 1,
            "related_citizen_id" => 4,
            "relation_type" => RelationType::where("relation", "brother/sister")->first()->id,
        ]);

        Relation::create([
            "citizen_id" => 2,
            "related_citizen_id" => 1,
            "relation_type" => RelationType::where("relation", "child")->first()->id,
        ]);

        Relation::create([
            "citizen_id" => 2,
            "related_citizen_id" => 3,
            "relation_type" => RelationType::where("relation", "spouse")->first()->id,
        ]);

        Relation::create([
            "citizen_id" => 2,
            "related_citizen_id" => 4,
            "relation_type" => RelationType::where("relation", "child")->first()->id,
        ]);

        Relation::create([
            "citizen_id" => 3,
            "related_citizen_id" => 1,
            "relation_type" => RelationType::where("relation", "child")->first()->id,
        ]);

        Relation::create([
            "citizen_id" => 3,
            "related_citizen_id" => 2,
            "relation_type" => RelationType::where("relation", "spouse")->first()->id,
        ]);

        Relation::create([
            "citizen_id" => 3,
            "related_citizen_id" => 4,
            "relation_type" => RelationType::where("relation", "child")->first()->id,
        ]);

        Relation::create([
            "citizen_id" => 4,
            "related_citizen_id" => 1,
            "relation_type" => RelationType::where("relation", "brother/sister")->first()->id,
        ]);

        Relation::create([
            "citizen_id" => 4,
            "related_citizen_id" => 2,
            "relation_type" => RelationType::where("relation", "brother/sister")->first()->id,
        ]);

        Relation::create([
            "citizen_id" => 4,
            "related_citizen_id" => 3,
            "relation_type" => RelationType::where("relation", "brother/sister")->first()->id,
        ]);
    }
}
