<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\RecommendQuiz;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GetQuizzes extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $data=array(
            array(
                'title'=>"java quiz",
                'pass_score'=>10,
                'skill_type' =>array("name"=>'software')
            ),array(
                'title'=>"building quiz",
                'pass_score'=>12,
                'skill_type' =>array("name"=>'worker')
            ),array(
                'title'=>"c++ quiz",
                'pass_score'=>15,
                'skill_type' =>array("name"=>'software')
            ));
        $data=json_encode($data);
        $response= new RecommendQuiz();
        $res=$response->getAllQuizess();

        $this->assertEquals($data,$res);
    }
}
