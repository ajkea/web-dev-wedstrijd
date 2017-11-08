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
        $artists=['Kanye West','Taylor Swift','Coldplay'];
        foreach ($artists as $artist){
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'street' => str_random(10),
            'streetnumber' => random_int(1,50),
            'town' => str_random(10),
            'zipcode' => random_int(1000,9999),
            'answer1' => 'Graduation',
            'answer2' => random_int(1,165),
            'artist' => $artist,
            'IPUser' => '192.138.0.12',
            'created_at' => date('Ymd',strtotime('+3 day')),
            'updated_at' => date('Ymd',strtotime('+3 day')),
        ]);
        }
    }
}
