<?php

namespace App\Models;

use CodeIgniter\Model;

class ChatModel extends Model
{
     protected $table      = 'chat';
     protected $primaryKey = 'id_chat';

     protected $useAutoIncrement = true;

     protected $returnType     = 'array';
     protected $useSoftDeletes = false;

     protected $allowedFields = ['isi', 'id_ticket', 'pengirim_account_id', 'penerima_account_id'];

     protected $useTimestamps = false;

     protected $validationRules    = [];
     protected $validationMessages = [];
     protected $skipValidation     = false;

     public function getChatTicket($id_ticket = null)
     {
          $chat = [];
          if ($id_ticket != null) {
               $chat = $this
                    ->select("chat.*, a.nama as nama")
                    ->join('account as a', 'a.id_account = chat.pengirim_account_id')
                    ->where(['id_ticket' => $id_ticket])
                    ->findAll();
          }
          return $chat;
     }
}