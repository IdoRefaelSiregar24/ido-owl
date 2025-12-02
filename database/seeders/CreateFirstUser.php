<?php

namespace Database\Seeders;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateFirstUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data['name']='Admin';
        $data['email']='ido24si@mahasiswa.pcr.ac.id';
        $data['password'] = Hash::make('ido24si@mahasiswa.pcr.ac.id');
        $data['role']='Super Admin';
        User::Create($data);
    }
}
