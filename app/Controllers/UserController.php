<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function login()
    {
        $data = [];

        if ($this->request->getMethod() != 'post') {
            return view('login', $data);
        }

        $rules = [
            'username' => 'required',
            'password' => 'required|min_length[8]|max_length[255]|validateUser[username,password]',
        ];

        $errors = [
            'password' => [
                'validateUser' => "Username or Password didn't match",
            ],
        ];

        if (!$this->validate($rules, $errors)) {

            return view('login', [
                "validation" => $this->validator,
            ]);
        }

        $model = new UserModel();
      
        $user = $model->where('username', $this->request->getVar('username'))
            ->first();

        // Storing session values
        $this->setUserSession($user);
      
        echo view('top');
        echo view('v_login');
        echo view('bottom');
    }

    private function setUserSession($user)
    {
        $data = [
            'user_id' => $user['user_id'],
            'username' => $user['username'],
            'email' => $user['email'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }

    public function register()
    {
        $data = [];

        if ($this->request->getMethod() != 'post') {
            return view('register', $data);
        }
      
        $rules = [
            'username' => 'required|min_length[3]|max_length[20]|is_unique[user.username]',
            'password' => 'required|min_length[8]|max_length[255]',
            'password_confirm' => 'matches[password]',
        ];

        if (!$this->validate($rules)) {
            return view('register', [
                "validation" => $this->validator,
            ]);
        }

        $model = new UserModel();

        $newData = [
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
        ];
        $model->save($newData);
        $session = session();
        $session->setFlashdata('success', 'Successful Registration');
        
        echo view('top');
        echo view('v_register');
        echo view('bottom');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
