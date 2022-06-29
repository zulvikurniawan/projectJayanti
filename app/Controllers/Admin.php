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

    public function accountAdd()
    {

        $data = [
            'title' => 'Add Account | Jayanti Program',
            'validation' => \config\Services::validation()
        ];

        return view('pages/accountAdd', $data);
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
            ],

            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password harus diisi.'
                ]
            ],

            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi.',
                ]
            ],

            // validasi jenis kelamin belum bisa
            // 'jenis_kelamin' => [
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => 'Jenis Kelamin harus diisi.',
            //     ]
            // ],

            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tempat lahir harus diisi.',
                ]
            ],

            'tanggal_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal lahir harus diisi.',
                ]
            ],

            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email harus diisi.',
                ]
            ],

            'nomor_hp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor hp harus diisi.',
                ]
            ],

            'tanggal_bergabung' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal bergabung harus diisi.',
                ]
            ]

        ])) {
            $validation = \config\Services::validation();
            return redirect()->to('/admin/accountAdd')->withInput()->with('validation', $validation);
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
