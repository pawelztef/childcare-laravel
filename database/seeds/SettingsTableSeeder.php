<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('settings')->insert([
        'catchphrase_line1' => 'Kubus Puchatek',
        'catchphrase_line2' => 'Witamy w przedszkolu',
      ]);
    }
}
