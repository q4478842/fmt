<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'first_name' => str_random(8),
            'last_name' => str_random(8),
            'user_id' => rand(1, 100),
            'description' => str_random(200),
            'phone_number' => rand(13000000000, 14000000000),
            'institution' => str_random(10),
            'image_path' => '/image/interface/0.png',
        ]);
    }
}
