<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Auth\Database\Seeders\UserTableSeeder;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        $this->call(UserTableSeeder::class);

    }
}
