<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\RecommendUser;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class GetUsers extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response=new RecommendUser();
        $res= $response->GetAllUsers();
        $data=$response=array(//will change it to the request from users
            array(
                    'id'=>0,
                    'username'=>'ahmed magdy',
                    'age' => 20,
                    'interests' =>'software',
                    'score' => 25
            ),array(
                'id'=>1,
                'username'=>'ahmed zizo',
                'age' => 20,
                'interests' =>'worker',
                'score' => 50
            ),array(
            'id'=>3,
            'username'=>'ane magdy',
            'age' => 20,
            'interests' =>'software',
            'score' => 10
            ));
            $data=json_encode($data);
            $this->assertEquals($data,$res);
    }
}
