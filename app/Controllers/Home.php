<?php

namespace App\Controllers;

use CodeIgniter\Config\DotEnv;

class Home extends BaseController
{
    public function index()
    {
        $link['url'] = $this->url();
        echo view('top');
        echo view('navbar',$link);
        echo view('v_home');
        echo view('footer',$link);
        echo view('bottom');
    }
}
