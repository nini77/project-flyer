<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FlyerControllerTest extends TestCase
{
    /** @test */
    public function it_show_the_form_to_create_a_new_flyer()
    {
        $this->visit('flyers/create');
        
    }
}