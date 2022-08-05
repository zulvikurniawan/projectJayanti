<?php

namespace App\Controllers;

class Ticket extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Ticket Status | Jayanti Program'
        ];

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

    public function list()
    {
        $data = [
            'title' => 'Ticket List | Jayanti Program',
            'ticket' => $this->TicketModel->getTicket()
        ];

        return view('pages/ticketList', $data);
    }

    public function detail($id_ticket)
    {
        $data = [
            'title' => 'Ticket Detail | Jayanti Program',
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
            'title' => 'Report | Jayanti Program'
        ];

        return view('pages/ticketReport', $data);
    }
    public function approval()
    {
        $data = [
            'title' => 'Ticket Approval | Jayanti Program',
            'ticket' => $this->TicketModel->getTicket()
        ];

        return view('pages/ticketApproval', $data);
    }

    public function chat()
    {
        $data = [
            'title' => 'Ticket | Jayanti Program'
        ];

        return view('pages/chat', $data);
    }
}
