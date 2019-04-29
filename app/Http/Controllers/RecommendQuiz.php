<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecommendQuiz extends Controller
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
    public function getAllQuizess()
    {
        $response=array(
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
            return json_encode($response);
    }

    public function reccomendQuizzes()
    {
        $alluser= $this->GetAllUsers();
        $allquizzes=$this->GetAllQuizess();

        $alluser2=json_decode($alluser);
        $allquizzes2=json_decode($allquizzes);

        $response=array();


        foreach($alluser2 as $user)
        {
            foreach($allquizzes2 as $quiz)
            {
                if($quiz->skill_type->name==$user->interests)
                {
                    $response[]=array(
                        $user->id=>array(
                            'user name' =>$user->username,
                            'quiz title' => $quiz->title,
                            'pass score' => $quiz->pass_score,
                            'common skills' =>$user->interests
                        )

                    );
                }
            }
        }
        return json_encode($response);
    }
}
