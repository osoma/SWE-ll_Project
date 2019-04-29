<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\RecommendUser;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class reccomenduser extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response=new RecommendUser();
        $res=json_decode($response->reccommendUsers(10,50));        
        $count=count($res);
        if($count==0)
        {
            $this->assertTrue(false);
        }else
            $this->assertCount($count,$res);
    }
}
