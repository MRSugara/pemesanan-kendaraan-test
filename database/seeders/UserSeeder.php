<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Admin
        User::create([
            'name' => 'Admin',
            'password' => 'password',
            'role_id' => 1,
            'divisi_id' => 1,
            'approve'=>1
        ]);
        User::create([
            'name' => 'yanti',
            'password' => 'password',
            'role_id' => 2,
            'divisi_id' => 1,
            'approve'=>1

        ]);
        //User
        User::create([
            'name' => 'yanto',
            'password' => 'password',
            'role_id' => 2,
            'divisi_id' => 2,
            'approve'=>1

        ]);
        User::create([
            'name' => 'suryana',
            'password' => 'password',
            'role_id' => 2,
            'divisi_id' => 3,
            'approve'=>1

        ]);
    }
}
