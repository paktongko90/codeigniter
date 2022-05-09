<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Site extends BaseController
{
    public function index()
    {
        //return view('site_index');
        return view('about-us');
    }
}
