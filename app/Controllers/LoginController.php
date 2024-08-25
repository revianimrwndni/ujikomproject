<?php

namespace App\Controllers;


use App\Models\UserModel;
use CodeIgniter\Controller;

class LoginController extends BaseController
{
    public function index()
    {
        return view('/Backend/Index');
    }
    public function __construct()
    {
        helper(['form', 'url', 'session']);
    }

    public function authenticate()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $userModel = new UserModel();
        $user = $userModel->findByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            // Authenticated, proceed with login logic
            // ...
            session()->set('isLoggedIn', true);
            session()->set('userData', $user);

            return redirect()->to('/Dashboard');
        } else {
            // Invalid credentials, show error message
            // ...
        }
    }
}
