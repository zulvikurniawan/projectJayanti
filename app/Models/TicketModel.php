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

    protected $allowedFields = ['type', 'category', 'priority', 'urgency', 'email_followup', 'my_device', 'location', 'email_watcher', 'title', 'description', 'ip', 'ext', 'status', 'id_account', 'id_assign'];

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

    public function getTicketStatus($ticketStatus, $form)
    {
        if (empty($form)) {
            return $this->where(['status' => $ticketStatus])->findAll();
        }
        $data = [];
        ($ticketStatus != "") ? $data['status'] = $ticketStatus : '';
        (array_key_exists('priority', $form) && $form['priority'] != "") ? $data['priority'] = $form['priority'] : '';
        (array_key_exists('category', $form) && $form['category'] != "") ? $data['category'] = $form['category'] : '';
        return $this->where($data)->findAll();
    }

    public function getTicketStatusForm($ticketStatus)
    {
        if (empty($ticketStatus)) {
            return $this->findAll();
        }
        $data = [];
        (array_key_exists('status', $ticketStatus) && $ticketStatus['status'] != "") ? $data['status'] = $ticketStatus['status'] : '';
        (array_key_exists('fromDate', $ticketStatus) && $ticketStatus['fromDate'] != "") ? $data['created_at >'] = $ticketStatus['fromDate'] : '';
        (array_key_exists('toDate', $ticketStatus) && $ticketStatus['toDate'] != "") ? $data['created_at <'] = $ticketStatus['toDate'] : '';
        return $this->where($data)->findAll();
    }

    public function getStatusTiket($user, $form)
    {
        $where = '';
        $data = [];
        // dd($user['id_jabatan']);
        if ($user['id_jabatan'] != 1) {
            $where = 'and id_account = :id_account:';
        }

        $sql = "SELECT UPPER(STATUS) as status, COUNT(STATUS) AS COUNT FROM ticket where 1 = 1 " . $where .  " GROUP BY status UNION SELECT 'HISTORY' AS STATUS, COUNT(STATUS) AS COUNT FROM ticket where 1 = 1 " . $where;


        // dd($sql);
        if ($user['id_jabatan'] != 1) {
            $data = ['id_account' => $user['id_account']];
        }
        return $this->db->query($sql, $data)->getResultArray();
    }
}
