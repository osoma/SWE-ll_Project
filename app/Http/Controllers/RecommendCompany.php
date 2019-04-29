<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecommendCompany extends Controller
{
    public function GetAllUsers()
    {
        $response=array(
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
        return json_encode($response);
    }
public function GetAllCompanies()
    {
        $response=array(
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
            return json_encode($response);
    }
public function reccommendCompanies()
    {
        $alluser= $this->GetAllUsers();
        $allcompanies= $this->GetAllCompanies();
        $alluser2= json_decode($alluser,true);
        $allcompanies2=json_decode($allcompanies,true);

        $response=array();
        foreach($alluser2 as $user)
        {
            foreach($allcompanies2 as $company)
            {
                if($user['interests']==$company['company_interests'] && $user['score']>=$company['rec_score'])
                {
                    $response[]=array(
                        $user['id']=>array(
                            'user name' =>$user['username'],
                            'company name' => $company['companyname'],
                            'company id' => $company['cid'],
                            'common interest' =>$user['interests']
                        )

                    );
                }
            }
        }
        return json_encode($response);
    }
    

}

