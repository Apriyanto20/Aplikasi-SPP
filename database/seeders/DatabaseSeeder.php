<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $datanew_user =[
            'nisn' => '100775001',
                'nis' => '10.2020.322',
                'name' => 'Adi Apriyanto',
                'kelas_id' => '1',
                'spp_id' => '1',
                'email' => 'adii@gmail.com',
                'username' => 'Aprynt20',
                'password' => bcrypt('123456'),
                'telepon' => '081213423429',
                'alamat' => 'Karangsari, Madura Wanareja Cilacap',
                'level' => 'admin',
                'jenis_kelamin' => 'Laki-laki'
          ];
          User::create($datanew_user);
    }
}