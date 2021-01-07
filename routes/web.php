<?php

use Illuminate\Support\Facades\Route;
use App\Helpers\SingletonPattern;
use App\Jobs\SendEmailJob;
use Carbon\Carbon;
use App\Mail\SendTestingEmail;
use Illuminate\Support\Facades\Mail;

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


Route::get('/singleton', function(){
    $classObj = SingletonPattern::setFoo('Hello,World');
    $classObj2 = SingletonPattern::setFoo('Hello,world again');

    return nl2br('FirstObjCall => '.$classObj->foo()."\n SecondObjCall => ".$classObj2->foo());
});

Route::get('/sendemail',function(){
     $job = (new SendEmailJob())->delay(Carbon::now()->addSeconds(10));
     dispatch($job);
     return "Email has been send";
});
