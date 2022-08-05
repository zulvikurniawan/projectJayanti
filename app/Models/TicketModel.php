<?php

namespace App\Models;

use CodeIgniter\Model;

class TicketModel extends Model
{
    protected $table      = 'ticket';
    protected $primaryKey = 'id_ticket';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['type', 'category', 'priority', 'urgency', 'email_followup', 'my_device', 'location', 'email_watcher', 'title', 'description', 'ip', 'ext', 'status'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getTicket($id_ticket = false)
    {
        if ($id_ticket == false) {
            return $this->findAll();
        }

        return $this->where(['id_ticket' => $id_ticket])->first();
    }
}
