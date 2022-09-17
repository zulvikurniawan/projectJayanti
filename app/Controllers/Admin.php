<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;
use CodeIgniter\I18n\Time;

// jika memakai contsruct
// use App\Models\AccountModel;

class Admin extends BaseController
{
    protected $AccountModel;
    protected $JabatanModel;

    public function index()
    {
        $data = [
            'title' => 'PT. PANARUB | Admin',
            'account' => $this->AccountModel->getAdmin()
        ];

        return view('pages/adminView', $data);
    }


    public function detail($id_account)
    {
        $data = [
            'title' => 'PT. PANARUB | Detail Account',
            'admin' => $this->AccountModel->getAdmin($id_account)
        ];

        return view('pages/detailAccountView', $data);
    }

    public function accountAdd()
    {
        $form = $this->request->getPost();
        if (session()->getFlashdata('_ci_old_input') != null) {
            $oldRequest = session()->getFlashdata('_ci_old_input');
            $form = $oldRequest['post'];
        };
        $jabatan = [];
        if (array_key_exists('divisi', $form)) {
            $jabatan = $this->JabatanModel->getJabatan($form['divisi']);
        }

        $data = [
            'title' => 'PT. PANARUB | Add Account',
            'validation' => \config\Services::validation(),
            'divisi' => $this->JabatanModel->getDivision(),
            'jabatan' => $jabatan
        ];
        // dd($data['divisi']);


        return view('pages/accountAdd', $data);
    }

    public function save()
    {
        // $form = $this->request->getPost();
        // if ($form['subaction'] == '' || $form['subaction'] != 'simpan') {
        //     return redirect()->to('/admin/accountAdd')->withInput();
        // }
        // dd($form);
        //validasi create account
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi.',
                ]
            ],
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
            'divisi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Divisi harus diisi.',
                ]
            ],
            'jabatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jabatan harus diisi.',
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Kelamin harus dipilih.',
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
            'id_jabatan' => $this->request->getVar('jabatan'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'email' => $this->request->getVar('email'),
            'nomor_hp' => $this->request->getVar('nomor_hp'),
            'tanggal_bergabung' => $this->request->getVar('tanggal_bergabung')
        ]);

        $id = $this->AccountModel->getInsertID();

        // $time = Time::today();
        // $year = $time->getYear() * 100;
        // $month = $time->getMonth();
        // $nik = $year + $month;
        // $nik = $nik * 10000;
        // $nik = $nik + $id;

        // $this->AccountModel->save([
        //     'id_account' => $id,
        //     'nik' => $nik
        // ]);

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
            'title' => 'PT. PANARUB | Edit Account',
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
        ]);

        session()->setFlashdata('tambahData', 'Data berhasil ubah.');
        return redirect()->to('/Admin');
    }
}
