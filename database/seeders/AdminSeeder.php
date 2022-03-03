<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
      {
        User::create([
            'name'=>'Walid Belegchour',
            'email'=>'wbelegchour@gmail.com',
            'password'=>bcrypt('walid123'),
            'user_type'=>'admin',
            'gender'=>'male',
            'username'=>'WalidNuevee'
        ]);
    }
}
