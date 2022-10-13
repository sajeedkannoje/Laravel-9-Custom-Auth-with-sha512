<?php

namespace Database\Seeders;

use App\Models\Districts;
use App\Models\States;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class DistrictsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Districts::truncate();
        $states = States::all();
        $district = [
            'maharashtra' => [
                'nagpur',
                'nasik',
                'amravati'
            ],
            'madhaya pradesh' => [
                'bhopal',
                'bhind',
                'indore'
            ],
            'delhi' => [
                'new Delhi',
                'north Delhi',
                'shahdara'
            ]
        ];
        foreach ($states as  $value) {
            if (array_key_exists($value->name, $district)) {
                foreach ($district[$value->name] as  $des) {
                    Districts::create([
                        'name' => $des,
                        'state_id' => $value->id
                    ]);
                }
            }
        }
    }
}
