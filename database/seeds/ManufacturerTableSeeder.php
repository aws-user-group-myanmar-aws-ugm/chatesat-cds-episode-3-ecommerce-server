<?php

use Illuminate\Database\Seeder;

class ManufacturerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'BlackBerry'],
            ['name' => 'SAMSUNG'],
            ['name' => 'OnePlus'],
            ['name' => 'APPLE'],
            ['name' => 'Google']
        ];

        DB::table('manufacturers')->insert($data);
    }
}
