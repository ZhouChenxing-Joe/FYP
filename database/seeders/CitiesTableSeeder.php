<?php
namespace Database\Seeders;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cities')->delete();

        // Retrieve the state IDs
        $states = State::pluck('id', 'name');

        // Mapping of cities to their respective states
        $cities = [
            'Kuala Lumpur' => ['Kuala Lumpur'],
            'Selangor' => ['Shah Alam', 'Petaling Jaya', 'Selayang', 'Subang Jaya', 'Kajang', 'Selayang', 'Sepang'],
            'Penang' => ['George Town'],
            'Perak' => ['Ipoh', 'Taiping', 'Manjung', 'Kampar', 'Tapah'],
            'Johor' => ['Johor Bahru', 'Batu Pahat', 'Muar', 'Pasir Gudang', 'Kluang', 'Pontian'],
            'Malacca' => ['Malacca City', 'Jasin'],
            'Sabah' => ['Kota Kinabalu', 'Sandakan', 'Keningau', 'Lahad Datu', 'Tawau'],
            'Sarawak' => ['Kuching', 'Miri', 'Sibu', 'Bintulu'],
            'Kedah' => ['Alor Setar', 'Kulim', 'Sungai Petani'],
            'Pahang' => ['Kuantan', 'Bentong', 'Pekan'],
            'Negeri Sembilan' => ['Seremban', 'Port Dickson'],
            'Terengganu' => ['Kuala Terengganu', 'Kemaman', 'Dungun', 'Besut', 'Kuala Krai', 'Marang'],
            'Perlis' => ['Kangar'],
            'Labuan' => ['Labuan'],
            'Putrajaya' => ['Putrajaya'],
            'Kelantan' => ['Kota Bharu', 'Tumpat', 'Gua Musang', 'Bachok', 'Tanah Merah', 'Pasir Mas', 'Jerteh', 'Rantau Panjang'],
            // Add more cities as needed
        ];

        foreach ($cities as $state => $citiesList) {
            if (isset($states[$state])) {
                $state_id = $states[$state];
                foreach ($citiesList as $city) {
                    City::create(['state_id' => $state_id, 'name' => $city]);
                }
            } else {
                echo "State {$state} not found in the database.\n";
            }
        }
    }
}
