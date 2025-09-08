<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginProcess()
    {
        try {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $userModel = new UserModel();
            $user = $userModel->where('username', $username)->first();

            if ($user && $password === $user['password']) {
                session()->set('isLoggedIn', true);
                session()->set('username', $user['username']);
                return redirect()->to('/');
            } else {
                session()->setFlashdata('error', 'Invalid username or password');
                return redirect()->to('/login');
            }
        } catch (\Exception $e) {
            session()->setFlashdata('error', $e->getMessage());
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
