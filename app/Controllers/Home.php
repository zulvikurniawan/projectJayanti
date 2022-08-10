<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'PT. PANARUB | Home'
        ];

        return view('pages/homeView', $data);
    }
}
