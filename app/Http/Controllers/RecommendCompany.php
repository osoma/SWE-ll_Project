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
    

}

