<?php

namespace App\Controllers;

use CodeIgniter\Config\DotEnv;

class Home extends BaseController
{
    public function index()
    {
        $link['url'] = $this->url();
        echo view('top');
        echo view('navbar', $link);
        echo view('v_home');
        echo view('footer', $link);
        echo view('bottom');
    }

    public function challenges()
    {
        $link['url'] = $this->url();
        echo view('top');
        echo view('navbar', $link);
        echo view('v_challenges');
        echo view('footer', $link);
        echo view('bottom');
    }

    public function history()
    {
        $link['url'] = $this->url();
        echo view('top');
        echo view('navbar', $link);
        echo view('v_history');
        echo view('footer', $link);
        echo view('bottom');
    }

    public function reward()
    {
        $link['url'] = $this->url();
        echo view('top');
        echo view('navbar', $link);
        echo view('v_reward');
        echo view('footer', $link);
        echo view('bottom');
    }

    public function learn()
    {
        $link['url'] = $this->url();
        echo view('top');
        echo view('navbar', $link);
        echo view('v_challenges');
        echo view('footer', $link);
        echo view('bottom');
    }

    public function community()
    {
        $link['url'] = $this->url();
        echo view('top');
        echo view('navbar', $link);
        echo view('v_challenges');
        echo view('footer', $link);
        echo view('bottom');
    }
}
