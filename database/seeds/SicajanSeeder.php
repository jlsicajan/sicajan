<?php

use Illuminate\Database\Seeder;

class SicajanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Sicajan',
            'password' => bcrypt('NeZPJp8Wc'),
            'email' => 'sicajancoy@gmail.com'
        ]);
    }
}
