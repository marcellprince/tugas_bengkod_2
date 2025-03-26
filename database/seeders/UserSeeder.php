<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'iqbal',
                'alamat' => 'Jl Kebangsaan',
                'no_hp' => '0825152738831',
                'role' => 'pasien',
                'email' => 'iqbal@gmail.com',
                'password' => 'password'
            ],
            [
                'nama' => 'ryan',
                'alamat' => 'Jl Kebangs',
                'no_hp' => '0825152738234',
                'role' => 'pasien',
                'email' => 'ryan@gmail.com',
                'password' => 'password'  
            ],
            [
                'nama' => 'roy',
                'alamat' => 'Jl Kebangsss',
                'no_hp' => '0825152738277',
                'role' => 'dokter',
                'email' => 'roy@gmail.com',
                'password' => 'password'  
            ],
            ];
        foreach($data as $d){
            User::create([
                'nama' => $d['nama'],
                'email' => $d['email'],
                'password' => $d['password'],
                'alamat' => $d['alamat'],
                'no_hp' => $d['no_hp'],
                'role' => $d['role']
            ]);
        }
    }
}
