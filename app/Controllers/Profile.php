<?php

namespace App\Controllers;

class Profile extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'PT. PANARUB | Profile'
        ];

        return view('pages/profileView', $data);
    }
}
