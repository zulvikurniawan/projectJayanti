<?php

namespace App\Controllers;

use App\Models\AccountModel;

class Login extends BaseController
{

    protected $AccountModel;

    public function index()
    {
        $data = [
            'title' => 'Login | Jayanti Program'
        ];

        return view('pages/login', $data);
    }

    public function proses()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $user = $this->AccountModel->getUsername($username);
        if ($username == null || $password == null) {
            session()->setFlashdata('error', 'Username atau Password Tidak Boleh Kosong.');
            return redirect()->to('/login')->withInput();
        }
        if ($user == null) {
            session()->setFlashdata('error', 'Username Tidak Terdaftar.');
            return redirect()->to('/login')->withInput();
        } else {
            if ($password == $user['password']) {
                return redirect()->to('/home');
            } else {
                session()->setFlashdata('error', 'Password Salah.');
                return redirect()->to('/login')->withInput();
            }
        }
    }

    public function logout()
    {
        session()->setFlashdata('success', 'Anda Berhasil Logout.');
        return redirect()->to('/login');
    }
}
