<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Ticket extends BaseController
{

    protected $TicketModel;

    public function index()
    {
        $data = [
            'title' => 'Ticket Status | Jayanti Program',
            'statusTicket' => array_column($this->TicketModel->getStatusTiket(session()->get('user')), 'COUNT', 'status')
        ];
        // dd(array_key_exists('APROVAL', $data['statusTicket']));
        return view('pages/ticketView', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Ticket | Jayanti Program'
        ];

        return view('pages/createTicketView', $data);
    }

    public function save()
    {
        $this->TicketModel->save([
            'status' => 'new',
            'type' => $this->request->getVar('type'),
            'category' => $this->request->getVar('category'),
            'priority' => $this->request->getVar('priority'),
            'urgency' => $this->request->getVar('urgency'),
            'email_followup' => $this->request->getVar('tempat_lahir'),
            'my_device' => $this->request->getVar('my_device'),
            'location' => $this->request->getVar('location'),
            'email_watcher' => $this->request->getVar('email_watcher'),
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'ip' => $this->request->getVar('ip'),
            'ext' => $this->request->getVar('ext')
        ]);



        session()->setFlashdata('tambahData', 'Data berhasil ditambahkan.');
        return redirect()->to('/Ticket/list');
    }

    public function list($status = '')
    {
        $data = [
            'title' => 'Ticket List | Jayanti Program',
            'status' => $status,
            'ticket' => $this->TicketModel->getTicketStatus($status)
        ];

        return view('pages/ticketList', $data);
    }

    public function Status()
    {
        # code...
        dd($this->request->getPost());
    }

    public function detail($id_ticket)
    {
        $data = [
            'title' => 'Ticket Detail | Jayanti Program',
            'ticket' => $this->TicketModel->getTicket($id_ticket)
        ];
        // dd(session()->get());

        return view('pages/ticketDetail', $data);
    }

    public function history($status = '')
    {
        $data = [
            'title' => 'Ticket History | Jayanti Program',
            'status' => $status,
            'ticket' => $this->TicketModel->getTicketStatus($status)
        ];

        return view('pages/ticketHistory', $data);
    }

    public function report()
    {
        $data = [
            'title' => 'Report | Tiani Program'
        ];

        return view('pages/ticketReport', $data);
    }
    public function approval()
    {
        $data = [
            'title' => 'Ticket Approval | Jayanti Program',
            'ticket' => $this->TicketModel->getTicketStatus('NEW')
        ];

        return view('pages/ticketApproval', $data);
    }

    public function acc($id)
    {
        $this->TicketModel->save([
            'id_ticket' => $id,
            'status' => 'approve',
        ]);
        session()->setFlashdata('tambahData', 'Data berhasil diapprove.');
        return redirect()->to('/Ticket/approval');
    }

    public function reject($id)
    {
        $this->TicketModel->save([
            'id_ticket' => $id,
            'status' => 'rejected',
        ]);
        session()->setFlashdata('tambahData', 'Data berhasil direject.');
        return redirect()->to('/Ticket/approval');
    }

    public function chat()
    {
        $data = [
            'title' => 'Ticket | Jayanti Program'
        ];

        return view('pages/chat', $data);
    }
}