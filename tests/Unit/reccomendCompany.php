<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\RecommendCompany;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class reccomendCompany extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response=new RecommendCompany();
        $res=json_decode($response->reccommendCompanies());        
        $count=count($res);
        if($count==0)
        {
            $this->assertTrue(false);
        }else
            $this->assertCount($count,$res);
        
    }
}
