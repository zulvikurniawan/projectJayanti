<?php

namespace App\Controllers;

class Profile extends BaseController
{

    public function index($id_account)
    {
        $data = [
            'title' => 'PT. PANARUB | Profile',
            'admin' => $this->AccountModel->getAdmin($id_account)
        ];

        return view('pages/profileView', $data);
    }
}
