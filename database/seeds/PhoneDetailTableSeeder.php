<?php

use Illuminate\Database\Seeder;

class PhoneDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "released" => "April, 2017",
                "chipset" => "Qualcomm® Snapdragon™ 625",
                "cpu" => "Octa-core 2.0 GHz Cortex-A53",
                "fcamera" => "8 MP, f/2.2",
                "rcamera" => "12 MP, f/2.0",
                "resolution" => "1080 x 1620 Pixels",
                "gpu" => "Adreno 506",
                "os" => "Upgradable to Android 8.0 (Oreo)",
                'phone_id' => 1
            ],
            [
                "released" => "February, 2019",
                "chipset" => "Exynos 7884",
                "cpu" => "Octa-core (2x1.6 GHz & 6x1.35GHz)",
                "fcamera" => "5 MP, f/2.0",
                "rcamera" => "13 MP, f/1.9, (wide)",
                "resolution" => "720x1520 Pixels",
                "gpu" => "Mali-G71 MP2",
                "os" => "Android 9.0 (Pie)",
                'phone_id' => 2
            ],
            [
                "released" => "August, 2018",
                "chipset" => "Exynos 9810",
                "cpu" => "Octa-core (4x2.7 GHz Mongoose M3 & 4x1.8 GHz Cortex-A55)",
                "fcamera" => "8 MP, f/1.7",
                "rcamera" => "Dual - 12 MP, f/1.5-2.4, (wide), OIS + 12 MP, f/2.4, (telephoto), OIS, 2x Optical Zoom",
                "resolution" => "1440x2960 Pixels",
                "gpu" => "Mali-G72 MP18",
                "os" => "Android 9.0 (Pie), One UI",
                'phone_id' => 3
            ],
            [
                "released" => "October, 2018",
                "chipset" => "Qualcomm® Snapdragon™ 845",
                "cpu" => "Octa-core (4x2.8 GHz Kryo 385 Gold & 4x1.7 GHz Kryo 385 Silver)",
                "fcamera" => "16 MP, f/2.0",
                "rcamera" => "Dual - 16 MP, f/1.7, (wide), OIS + 20 MP, f/1.7",
                "resolution" => "1080 x 2340 Pixels",
                "gpu" => "Adreno 630",
                "os" => "Android 9.0 (Pie), HydrogenOS (Upgradable to OxygenOS)",
                'phone_id' => 4
            ],
            [
                "released" => "October, 2018",
                "chipset" => "Qualcomm® Snapdragon™ 845",
                "cpu" => "Octa-core (4x2.5 GHz Kryo 385 Gold & 4x1.6 GHz Kryo 385 Silver)",
                "fcamera" => "Dual - 8 MP, f/1.8 + 8 MP, f/2.2",
                "rcamera" => "12.2 MP, f/1.8 (wide), OIS",
                "resolution" => "1080 x 1920 Pixels",
                "gpu" => "Adreno 540",
                "os" => "Upgradable to Android 9.0 (Pie)",
                'phone_id' => 5
            ],
            [
                "released" => "September, 2018",
                "chipset" => "Apple A12 Bionic",
                "cpu" => "Hexa-core (2x2.5 GHz Vortex + 4x1.6 GHz Tempest)",
                "fcamera" => "7 MP, f/2.2",
                "rcamera" => "12 MP, f/1.8, OIS",
                "resolution" => "828 x 1792 Pixels",
                "gpu" => "Apple GPU (4-core Graphics)",
                "os" => "iOS 12, Upgradable to iOS 12.3.1",
                'phone_id' => 6
            ],
            [
                "released" => "September, 2018",
                "chipset" => "Apple A12 Bionic",
                "cpu" => "Hexa-core (2x2.5 GHz Vortex + 4x1.6 GHz Tempest)",
                "fcamera" => "7 MP, f/2.2",
                "rcamera" => "Dual - 12 MP, f/1.8, (wide) + 12 MP, f/2.4, (telephoto), OIS, 2x Optical Zoom",
                "resolution" => "828 x 1792 Pixels",
                "gpu" => "1242 x 2688 Pixels",
                "os" => "iOS 12, Upgradable to iOS 12.3.1",
                'phone_id' => 7
            ],
            [
                "released" => "September, 2017",
                "chipset" => "Apple A11 Bionic",
                "cpu" => "Hexa-core 2.39 GHz (2x Monsoon + 4x Mistral)",
                "fcamera" => "7 MP, f/2.2",
                "rcamera" => "Dual - 12 MP, f/1.8, (wide) + 12 MP, f/2.4, (telephoto), OIS, 2x Optical Zoom",
                "resolution" => "1125 x 2436 Pixels",
                "gpu" => "Apple GPU (Three-core Graphics)",
                "os" => "iOS 12, Upgradable to iOS 12.3.1",
                'phone_id' => 8
            ],
            [
                "released" => "August, 2019",
                "chipset" => "Exynos 9825",
                "cpu" => "Octa-core (2x2.73 GHz Mongoose M4 & 2x2.4 GHz Cortex-A75 & 4x1.9 GHz Cortex-A55)",
                "fcamera" => "10 MP, f/2.2, (wide)",
                "rcamera" => "Triple - 12 MP, f/1.5-1.8-2.4, (wide), OIS + 12 MP, f/2.1, (telephoto), OIS, 2x Optical Zoom + 16 MP, f/2.2, (ultrawide)",
                "resolution" => "1080 x 2280 Pixels",
                "gpu" => "Octa-core (2x2.73 GHz Mongoose M4 & 2x2.4 GHz Cortex-A75 & 4x1.9 GHz Cortex-A55)",
                "os" => "Android 9.0 (Pie), One UI",
                'phone_id' => 9
            ],
            [
                "released" => "August, 2019",
                "chipset" => "Exynos 9825",
                "cpu" => "Octa-core (2x2.73 GHz Mongoose M4 & 2x2.4 GHz Cortex-A75 & 4x1.9 GHz Cortex-A55)",
                "fcamera" => "10 MP, f/2.2, (wide)",
                "rcamera" => "Quad - 12 MP, f/1.5-1.8-2.4, (wide), OIS + 12 MP, f/2.1, (telephoto), OIS, 2x Optical Zoom + 16 MP, f/2.2, (ultrawide) + TOF 3D VGA Camera",
                "resolution" => "1440 x 3040 Pixels",
                "gpu" => "Mali-G76 MP12",
                "os" => "Android 9.0 (Pie), One UI",
                'phone_id' => 10
            ]
        ];

        DB::table('phone_details')->insert($data);
    }
}
