<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id');

        for ($i = 1; $i <= 5; $i++) {

            // insert data ke table pegawai menggunakan Faker
            DB::table('staff')->insert([
                'name' => $faker->name,
                'alamat' => $faker->address,
                'hp' => $faker->phoneNumber,
                'lahir' => $faker->date, 
                'projects_id' => '1',
                'dpt_id' => '1',
                'pos_id' => '1',
                'gender' => 'Pria',
                'photos' => '',
            ]);
        }
    }
}
