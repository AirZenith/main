<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function login()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {

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
            } else {
                $model = new UserModel();

                $user = $model->where('username', $this->request->getVar('username'))
                    ->first();

                // Storing session values
                $this->setUserSession($user);
            }
        }
        return view('login');
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

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
