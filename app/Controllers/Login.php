<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login | Jayanti Program'
        ];

        return view('pages/login', $data);
    }
}
