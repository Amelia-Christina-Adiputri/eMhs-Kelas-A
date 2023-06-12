<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=20; $i++){
            $faker=Faker::create('en_US');
            DB::table('mahasiswa')->insert([
                'nim' => $faker->randomNumber(6, true),
                'nama' => $faker->name(),
                'gender' => $faker->lexify(),
                'prodi' => $faker->sentence(1),
                'minat' => $faker->sentence(2),
            ]);
        }
    }
}