<?php

namespace Database\Seeders;

use App\Models\States;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        States::truncate();
        $states = [
            'maharashtra',
            'madhaya pradesh',
            'delhi'
        ];
        foreach ($states as  $value) {
            States::create([
                'name' => $value
            ]);
        }

    }
}
