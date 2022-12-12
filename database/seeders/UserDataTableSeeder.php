<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        User::create([
           'name' => 'admin',
           'email' => 'admin@admin.com',
           'password' => Hash::make(123456789),
           'status' => 'admin',
        ]);

        User::create([
            'name' => 'customer',
            'email' => 'customer@customer.com',
            'password' => Hash::make(123456789),
            'status' => 'customer',
        ]);
    }
}
