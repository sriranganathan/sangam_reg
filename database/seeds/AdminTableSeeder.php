<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'admin_handle' => "admin",
            'admin_password' => "e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4",

        ]);
    }
}
