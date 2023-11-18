<?php

namespace Database\Seeders;

use App\Models\users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');
        for($i=0;$i < 10; $i++){
            users::create([
                'email'=>$faker->email,
                'password'=>Hash::make('aqshatampan'),
                'nisn' =>'0001',
                'id_roles'=>'1'
            ]);
        }
    }
}
