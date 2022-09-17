<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model
{
    protected $table      = 'account';
    protected $primaryKey = 'id_account';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nik', 'password', 'nama', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'email', 'nomor_hp', 'tanggal_bergabung', 'foto_profil', 'id_jabatan'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getAdmin($id_account = false)
    {
        if ($id_account == false) {
            return $this->findAll();
        }

        return $this->where(['id_account' => $id_account])->first();
    }

    public function getUsername($username = false)
    {
        if ($username == false) {
            return session()->setFlashdata('error', 'Username Tidak Boleh Kosong.');
        }
        return $this
            ->select('account.*,j.nama as nama_jabatan,j.id_parent as id_parent,j.id_head as id_head')
            ->join('jabatan as j', 'j.id_jabatan = account.id_jabatan')
            ->where(['nik' => $username])
            ->first();
    }

    public function getAssignTo()
    {
        return $this
            ->select('account.*,j.nama as nama_jabatan')
            ->join('jabatan as j', 'j.id_jabatan = account.id_jabatan')
            ->where(['j.id_jabatan' => '7'])
            ->findAll();
    }

    public function getAtasan($user)
    {
        $command = '';
        if ($user['id_jabatan'] == 1) {

            $command = $this
                ->select('account.*,j.nama as nama_jabatan,j.id_parent as id_parent')
                ->join('jabatan as j', 'j.id_jabatan = account.id_jabatan')
                ->findAll();
        } else {

            $command = $this
                ->select('account.*,j.nama as nama_jabatan,j.id_parent as id_parent')
                ->join('jabatan as j', 'j.id_jabatan = account.id_jabatan')
                ->where(['account.id_jabatan' => $user['id_head']])
                ->findAll();
        }


        return $command;
    }
}