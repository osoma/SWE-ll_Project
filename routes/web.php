<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function(){
    return "hello world";
});

Route::get('/reccomendCompanies','RecommendCompany@reccommendCompanies');
Route::get('/reccomendCompany/{id}','RecommendCompany@reccommendCompany');

Route::get('/reccomendquizzes','RecommendQuiz@reccomendQuizzes');
Route::get('/reccomendquiz/{id}','RecommendQuiz@reccomendQuiz');


Route::get('/reccomendusers/{score}/{age}','RecommendUser@reccommendUsers');
Route::get('/reccomenduser/{id}/{score}/{age}','RecommendUser@reccommendUser');

