<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SiteController extends BaseController
{
    public function index()
    {
        return view('site_index');
    }
}
