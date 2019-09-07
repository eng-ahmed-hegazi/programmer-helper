<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Admin::create([
            'name'      => 'Ahmed',
            'email'     => 'ahmed@gmail.com',
            'password'  => bcrypt('ahmed@gmail.com')
        ]);
    }
}
