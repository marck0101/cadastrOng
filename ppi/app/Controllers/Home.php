<?php

namespace App\Controllers;

use App\Models\AnimaisModel;

class Home extends BaseController
{
    public function index()
    {

        


        return view('welcome_message');
    }
}
