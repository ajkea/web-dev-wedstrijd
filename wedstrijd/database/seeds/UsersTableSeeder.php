<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'street' => str_random(10),
            'streetnumber' => random_int(1,50),
            'town' => str_random(10),
            'zipcode' => random_int(1000,9999),
            'answer1' => 'Graduation',
            'answer2' => '59',
            'IPUser' => '192.138.0.12',
            'created_at' => date('Ymd',strtotime('-1 hour')),
            'updated_at' => date('Ymd',strtotime('-1 hour')),
        ]);
    }
}
