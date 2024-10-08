<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DormitoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dormitories')->delete();
        $data = [
            ['name' => 'College Tun Fatimah'],
            ['name' => 'College Tun Dr. Ismail'],
            ['name' => 'College Tun Hussein Onn'],
            ['name' => 'College Datin Seri Endon'],
            ['name' => 'College Perdana'],
            ['name' => 'Scholar’s Inn'],
            ['name' => 'College Tun Razak'],
            ['name' => 'College Rahman Putra'],
            ['name' => 'College Tuanku Canselor'],
            ['name' => 'College Dato Onn Jaafar'],
            ['name' => 'College 9 & 10'],
            ['name' => 'K Hotel Sdn. Bhd.'],
            ['name' => 'Melana Apartment'],
            ['name' => 'Sky Garden'],
            ['name' => 'Cinta Ayu All Suites'],
            ['name' => 'KSL D’Inspire Residence'],
            ['name' => 'D’Summit Residences'],
            ['name' => 'Melawis Apartment'],
            ['name' => 'The Garden Residences'],
            ['name' => 'Sky Loft Premium Suites'],
            ['name' => 'Rose Cottage Hotel'],
            ['name' => 'KSL D Secret Garden'],
            ['name' => 'College Kediaman Siswajaya'],
            ['name' => 'Scholars Inn'],
            ['name' => 'Residensi UTM KL'],
            ['name' => 'The Royal Widad'],
            ['name' => 'Gurney Height Condominium'],
            ['name' => 'Setia Sky'],
        ];
        DB::table('dormitories')->insert($data);
    }
}
