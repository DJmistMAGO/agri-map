<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!User::where('username', 'admin')->first()) {
            $user = User::create([
                'name' => 'Admin',
                'username' => 'admin',
                'password' => Hash::make('adminbnhs')
            ]);
        }
        if (!User::where('username', 'agridept')->first()) {
            $user = User::create([
                'name' => 'DeptAgri',
                'username' => 'agridept',
                'password' => Hash::make('guest')
            ]);
        }
    }
}
