<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

// jika memakai contsruct
// use App\Models\AccountModel;

class Admin extends BaseController
{
    protected $AccountModel;

    public function index()
    {
        $data = [
            'title' => 'Admin | Jayanti Program',
            'account' => $this->AccountModel->getAdmin()
        ];

        return view('pages/adminView', $data);
    }


    public function detail($id_account)
    {
        $data = [
            'title' => 'Detail Account | Jayanti Program',
            'admin' => $this->AccountModel->getAdmin($id_account)
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
                'rules' => 'required|is_unique[account.nik]|max_length[10]|min_length[10]',
                'errors' => [
                    'required' => 'ID harus diisi.',
                    'is_unique' => 'ID sudah terdaftar.',
                    'max_length' => 'ID Tidak Sesuai',
                    'min_length' => 'ID Tidak sesuai'
                ]
            ],

            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi.',
                ]
            ],

            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password harus diisi.'
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
            'nama' => $this->request->getVar('nama'),
            'password' => $this->request->getVar('password'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'email' => $this->request->getVar('email'),
            'nomor_hp' => $this->request->getVar('nomor_hp'),
            'tanggal_bergabung' => $this->request->getVar('tanggal_bergabung'),
            'foto_profil' => $this->request->getVar('foto_profil')
        ]);

        session()->setFlashdata('tambahData', 'Data berhasil ditambahkan.');
        return redirect()->to('/Admin');
    }

    public function delete($id_account)
    {
        $this->AccountModel->delete($id_account);
        session()->setFlashdata('hapusData', 'Data berhasil dihapus.');
        return redirect()->to('/Admin');
    }

    //method untuk form edit
    public function edit($id_account)
    {
        $data = [
            'title' => 'Edit Account | Jayanti Program',
            'validation' => \config\Services::validation(),
            'admin' => $this->AccountModel->getAdmin($id_account)
        ];

        return view('pages/accountEdit', $data);
    }

    //method untuk function update
    public function update($id_account)
    {
        //cek data yang dikirim
        // dd($this->request->getVar());

        if (!$this->validate([

            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi.',
                ]
            ]

        ])) {
            $validation = \config\Services::validation();
            return redirect()->to('/admin/edit/' . $this->request->getVar('id_account'))->withInput()->with('validation', $validation);
        }

        $this->AccountModel->save([
            'id_account' => $id_account,
            'nama' => $this->request->getVar('nama'),
            'password' => $this->request->getVar('password'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'email' => $this->request->getVar('email'),
            'nomor_hp' => $this->request->getVar('nomor_hp'),
            'tanggal_bergabung' => $this->request->getVar('tanggal_bergabung'),
            'foto_profil' => $this->request->getVar('foto_profil')
        ]);

        session()->setFlashdata('tambahData', 'Data berhasil ubah.');
        return redirect()->to('/Admin');
    }
}
