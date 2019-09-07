<?php

use Illuminate\Database\Seeder;
use App\Setting;
class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'site_name'             => 'PROGRAMMER HELPER',
            'contact_number'        => '+20 0111 783 5451',
            'contact_email'         => 'ahemdhegazy214@gmail.com',
            'contact_address'       => 'Eqy - Sohag - gehena',
            'contact_facebook'      => 'facebook.com',
            'contact_twitter'       => 'twitter.com',
            'contact_youtube'       => 'youtube.com',
            'about'                => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti, labore?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti, labore? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti, labore?'
        ]);
    }
}
