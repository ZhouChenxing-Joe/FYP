<?php
namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('states')->delete();

        $states = [
            'Johor', 'Kedah', 'Kelantan', 'Perak', 'Selangor', 'Malacca', 
            'Negeri Sembilan', 'Pahang', 'Perlis', 'Penang', 'Sabah', 
            'Sarawak', 'Terengganu', 'Labuan', 'Putrajaya', 'Kuala Lumpur'
        ];

        foreach ($states as $state) {
            State::create(['name' => $state]);
        }
    }

}
