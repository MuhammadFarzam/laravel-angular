<?php

namespace App\Helpers;

class SingletonPattern {

  private $foo;


//    public function __construct($val){
//        $this->foo = $val;
//    }


  public function foo(){
    return $this->foo;
  }

  public static function bar(){ 
    return app(SingletonPattern::class)->foo();
  }

  public static function setFoo($foo){
    $classObj = app(SingletonPattern::class);
    $classObj->foo = $foo;

    return $classObj;
  }




}