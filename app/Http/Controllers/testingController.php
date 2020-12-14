<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testingController extends Controller
{
    public $name;
    public function __construct()
    {
       $this->name = 'Farzam';
    }
}
