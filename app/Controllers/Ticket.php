<?php

namespace App\Controllers;

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
            'title' => 'PT. PANARUB | Create Ticket'
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
            'title' => 'PT. PANARUB | Ticket List',
            'ticket' => $this->TicketModel->getTicketStatus($status)
        ];

        return view('pages/ticketList', $data);
    }

    public function detail($id_ticket)
    {
        $data = [
            'title' => 'PT. PANARUB | Ticket Detail',
            'ticket' => $this->TicketModel->getTicket($id_ticket)
        ];

        return view('pages/ticketDetail', $data);
    }

    public function history()
    {
        $data = [
            'title' => 'Ticket History | Jayanti Program'
        ];

        return view('pages/ticketHistory', $data);
    }

    public function report()
    {
        $data = [
            'title' => 'PT. PANARUB | Report'
        ];

        return view('pages/ticketReport', $data);
    }
    public function approval()
    {
        $data = [
            'title' => 'PT. PANARUB | Ticket Approval',
            'ticket' => $this->TicketModel->getTicket()
        ];

        return view('pages/ticketApproval', $data);
    }

    public function chat()
    {
        $data = [
            'title' => 'PT. PANARUB | Ticket'
        ];

        return view('pages/chat', $data);
    }
}
