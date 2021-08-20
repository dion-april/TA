<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class pegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Dion Apriliyadi";
        $user->username = 3235235235;
        $user->password = Hash::make("Pegawai123");
        $user->level = "pegawai";
        $user->save();
    }
}
