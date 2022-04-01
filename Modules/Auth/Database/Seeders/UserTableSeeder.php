<?php

namespace Modules\Auth\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Auth\Entities\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();


        $admin = User::firstOrCreate([
            'email' => 'admin@demo.com',
            'name' => 'Admin',
            'password' => bcrypt('password'),
        ]);

        $admin->attachRole('super_admin');

        $root = User::firstOrCreate([
            'email' => 'root@demo.com',
            'name' => 'Root',
            'password' => bcrypt('11445522'),
        ]);

        $root->attachRole('super_admin');
    }
}
