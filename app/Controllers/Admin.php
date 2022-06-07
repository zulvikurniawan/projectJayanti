<?php

namespace App\Controllers;

// jika memakai contsruct
// use App\Models\AccountModel;

class Admin extends BaseController
{
    protected $AccountModel;
    // jika memaki contstruct

    // public function __construct()
    // {
    // $this->AccountModel = new AccountModel();
    // }

    public function index()
    {
        // tidak memakai construct
        // namespace berada dalam BaseController

        // $account = $this->AccountModel->findAll();

        $data = [
            'title' => 'Admin | Jayanti Program',
            'account' => $this->AccountModel->getAdmin()
        ];

        return view('pages/adminView', $data);
    }


    public function detail($nik)
    {
        $data = [
            'title' => 'Detail Account | Jayanti Program',
            'admin' => $this->AccountModel->getAdmin($nik)
        ];

        return view('pages/detailAccountView', $data);
    }

    public function addAccount()
    {
        $data = [
            'title' => 'Add Account | Jayanti Program'
        ];

        return view('pages/addAccountView', $data);
    }
}
