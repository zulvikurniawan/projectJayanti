<?php

namespace App\Models;

use CodeIgniter\Model;

class JabatanModel extends Model
{
    protected $table      = 'jabatan';
    protected $primaryKey = 'id_jabatan';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getDivision()
    {
        return $this->where(['id_parent' => null])->findAll();
    }

    public function getJabatan($id_parent = null)
    {
        $jabatan = [];
        if ($id_parent != null) {
            $jabatan = $this->where(['id_parent' => $id_parent])->findAll();
        }
        return $jabatan;
    }
}
