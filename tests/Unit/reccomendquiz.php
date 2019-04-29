<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\RecommendQuiz;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class reccomendquiz extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response=new RecommendQuiz();
        $res=json_decode($response->reccomendQuiz());        
        $count=count($res);
        if($count==0)
        {
            $this->assertTrue(false);
        }else
            $this->assertCount($count,$res);
    }
}
