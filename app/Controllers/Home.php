<?php

namespace App\Controllers;

use CodeIgniter\Config\DotEnv;

class Home extends BaseController
{

    public function index()

    {
        echo view('navbar');
        echo view('v_home');
        echo view('bottom');
    }
}
