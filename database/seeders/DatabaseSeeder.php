<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fullname'=>'Admin 1',
            'email'=>'admin@mail.com',
            'password'=>'pass123',
            'gender'=>'',
            'age'=>'',
            'status'=>'1',
            'role'=>'1',
        ]);
    }
}
