<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        $data = [
            ['type' => 'current_session', 'description' => '2023-2024'],
            ['type' => 'system_title', 'description' => 'JoIO'],
            ['type' => 'system_name', 'description' => 'JoIO Academy'],
            ['type' => 'term_ends', 'description' => '07/31/2024'],
            ['type' => 'term_begins', 'description' => '10/13/2024'],
            ['type' => 'phone', 'description' => '0123456789'],
            ['type' => 'address', 'description' => '18B North Central Park, Behind Central Square Tourist Center'],
            ['type' => 'system_email', 'description' => 'JoIo@joio.com'],
            ['type' => 'alt_email', 'description' => ''],
            ['type' => 'email_host', 'description' => ''],
            ['type' => 'email_pass', 'description' => ''],
            ['type' => 'lock_exam', 'description' => 0],
            ['type' => 'logo', 'description' => ''],
            ['type' => 'next_term_fees_pt-b', 'description' => '200'],
            ['type' => 'next_term_fees_pt-m', 'description' => '250'],
            ['type' => 'next_term_fees_pt-pd', 'description' => '250'],
            ['type' => 'next_term_fees_pt-d', 'description' => '256'],
            ['type' => 'next_term_fees_pt-sa', 'description' => '156'],
        ];

        DB::table('settings')->insert($data);

    }
}
