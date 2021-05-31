<?php

use Illuminate\Database\Seeder;

class ConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Config::insert([
            ['name' => 'site_name', 'value' => 'StarsGyan Blog'],
            ['name' => 'site_title', 'value' => 'StarsGyan Blog'],
            ['name' => 'copyright_owner', 'value' => 'StarsGyan'],
            ['name' => 'admin_email', 'value' => 'ceostarsgyan@gmail.com'],
        ]);
    }
}
