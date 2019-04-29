<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\RecommendUser;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GetCompanies extends TestCase
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
                    'cid'=>0,
                    'companyname'=>'google',
                    'company_interests' =>'software',
                    'rec_score'=>20
            ),array(
                'cid'=>1,
                'companyname'=>'valeo',
                'company_interests' =>'software',
                'rec_score'=>9

            ),array(
                'cid'=>2,
                'companyname'=>'testing',
                'company_interests' =>'worker',
                'rec_score'=>25

            ));
            $data=json_encode($data);
            $response=new RecommendUser();
            $res= $response->GetAllCompanies();
            $this->assertEquals($data,$res);
    }
}
