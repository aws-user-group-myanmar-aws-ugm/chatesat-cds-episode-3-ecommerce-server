<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Phone extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function canSavePhoneToDB()
    {
        $phone = new \App\Phone;
        $phone->slug = 'oneplus_6t_256gb_mclaren_edition';
        $phone->name = 'OnePlus 6T 10/256GB McLaren Edition';
        $phone->image = 'https://staticimages-awsugmm.s3-ap-southeast-1.amazonaws.com/One_Plus_6T_McLaren.jpg';
        $phone->price = 1219000;
        $phone->dimension = 5.41;
        $phone->memory = '10GB RAM, 256 GB Storage';
        $phone->manufacturer_id = 1;
        $phone->save();

        $phone_in_db = \App\Phone::first()->toJson();
        $this->assertJsonFragment($phone_in_db, ['name' => 'OnePlus 6T 10/256GB McLaren Edition']);
    }
}
