<?php

namespace App\Controllers;
use App\Libraries\MyCustomClass;

class Home extends BaseController
{
    public function index()
    {
       // return view('welcome_message');
        $mine = new MyCustomClass();
        echo $mine->sayHi();
    }
}
