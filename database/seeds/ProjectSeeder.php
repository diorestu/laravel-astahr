<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id');

        for ($i = 1; $i <= 15; $i++) {

            // insert data ke table pegawai menggunakan Faker
            DB::table('projects')->insert([
                'name' => $faker->company,
                'alamat' => $faker->address,
                'deskripsi' => $faker->text($maxNbChars = 200),
                'kontrak' => '1',
                'file_1' => '',
                'file_2' => '',
                'file_3' => '',
            ]);
        }
    }
}
