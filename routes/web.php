<?php

use Illuminate\Support\Facades\Route;
use App\Helpers\SingletonPattern;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('charts',function(){
   return view('highcharts');
});


Route::get('/singleton', function(){
    $classObj = SingletonPattern::setFoo('Hello,World');
    $classObj2 = SingletonPattern::setFoo('Hello,world again');

    return nl2br('FirstObjCall => '.$classObj->foo()."\n SecondObjCall => ".$classObj2->foo());
});