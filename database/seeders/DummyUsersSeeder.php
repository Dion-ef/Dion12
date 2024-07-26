<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=[
            [
                'name'=>'Dion Eka Fahrezi',
                'alamat'=>'Trenggalek',
                'no'=>'77777',
                'level'=>'admin',
                'email'=>'admin1@gmail.com',
                'password'=>bcrypt('admin1')
            ],
            [
                'name'=>'Hadi Nawar',
                'alamat'=>'Trenggalek',
                'no'=>'777777',
                'level'=>'pembeli',
                'email'=>'hadi2@gmail.com',
                'password'=>bcrypt('hadi456')
            ],
            [
                'name'=>'Muhammad Riski',
                'alamat'=>'Ponorogo',
                'no'=>'777777',
                'level'=>'admin',
                'email'=>'admin2@gmail.com',
                'password'=>bcrypt('admin2')
            ],
        ];

        foreach($user as $key => $val){
            User::create($val);
        }
    }
}
