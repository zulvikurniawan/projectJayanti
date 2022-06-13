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


    public function detail($nama)
    {
        $data = [
            'title' => 'Detail Account | Jayanti Program',
            'admin' => $this->AccountModel->getAdmin($nama)
        ];

        return view('pages/detailAccountView', $data);
    }

    public function addAccount()
    {

        $data = [
            'title' => 'Add Account | Jayanti Program',
            'validation' => \config\Services::validation()
        ];

        return view('pages/addAccountView', $data);
    }

    public function save()
    {
        //validasi create account
        if (!$this->validate([
            'nik' => [
                'rules' => 'required|is_unique[account.nik]',
                'errors' => [
                    'required' => 'ID harus diisi.',
                    'is_unique' => 'ID sudah terdaftar.'
                ]
            ]
        ])) {
            $validation = \config\Services::validation();
            return redirect()->to('/admin/addAccount')->withInput()->with('validation', $validation);
        }

        $this->AccountModel->save([
            'nik' => $this->request->getVar('nik'),
            'password' => $this->request->getVar('password'),
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'email' => $this->request->getVar('email'),
            'nomor_hp' => $this->request->getVar('nomor_hp'),
            'tanggal_bergabung' => $this->request->getVar('tanggal_bergabung'),
            'foto_profil' => $this->request->getVar('foto_profil')
        ]);


        return redirect()->to('/admin');
    }
}
