<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nelson = User::create([
            'name' => 'nelson',
            'email' => 'nesalaz56@gmail.com',
            'password' => Hash::make('Negisaro#1973/*-')
        ]);
        $nelson->assignRole('admin');

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@speaksmarter.net',
            'password' => Hash::make('admin')
        ]);
        $admin->assignRole('admin');

        $editor = User::create([
            'name' => 'editor',
            'email' => 'editor@speaksmarter.net',
            'password' => Hash::make('editor')
        ]);
        $editor->assignRole('editor');
    }
}
