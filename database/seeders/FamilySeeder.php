<?php

namespace Database\Seeders;

use App\Models\Appartment;
use App\Models\Citizen;
use App\Models\Family;
use App\Models\Relation;
use App\Models\RelationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<10; $i++) {
            Family::factory()->hasCitizens(rand(1, 6))->create();
        }
        
        foreach (Family::where("id", "!=", 1)->get() as $family) {
			$family->update([
                "appartment" => Appartment::inRandomOrder()->first()->id,
                "goodman" => $family->citizens()->inRandomOrder()->first()->id,
            ]);
            foreach ($family->citizens as $member) {
                // echo Citizen::inRandomOrder()->where("family", $member->family)->where("id", "!=", $member->id)->first()->id;
                Relation::create([
                    "citizen_id" => $member->id,
                    "related_citizen_id" => Citizen::where("family", $member->family)->where("id", "!=", $member->id)->inRandomOrder()->first()->id,
                    "relation_type" => RelationType::inRandomOrder()->first()->id,
                ]);
            }
		}
    }
}
