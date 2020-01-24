<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'username' => 'rupan',
            'email' => 'rupandangol87@gmail.com',
            'password' => bcrypt('rupan'),
        ]);
    }
}
