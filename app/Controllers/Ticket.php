<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Ticket extends BaseController
{

    protected $TicketModel;
    protected $AccountModel;

    public function index()
    {
        $form = $this->request->getPost();
        $data = [
            'title' => 'Ticket Status | Jayanti Program',
            'statusTicket' => array_column($this->TicketModel->getStatusTiket(session()->get('user'), $form), 'COUNT', 'status')
        ];
        // dd($data['statusTicket']);
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

    public function list($status)
    {
        $form = $this->request->getPost();
        $data = [
            'title' => 'Ticket List | Jayanti Program',
            'ticket' => $this->TicketModel->getTicketStatus($status, $form),
            'status' => $status
        ];

        return view('pages/ticketList', $data);
    }

    public function detail($id_ticket)
    {
        $data = [
            'title' => 'PT. PANARUB | Ticket Detail',
            'ticket' => $this->TicketModel->getTicket($id_ticket)
        ];
        // dd(session()->get());

        return view('pages/ticketDetail', $data);
    }

    public function history()
    {
        $status = $this->request->getPost();
        $data = [
            'title' => 'Ticket History | Jayanti Program',
            'status' => $status,
            'ticket' => $this->TicketModel->getTicketStatusForm($status)
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
        $form = [];
        $status = 'NEW';
        $data = [
            'title' => 'Ticket Approval | Jayanti Program',
            'ticket' => $this->TicketModel->getTicketStatus($status, $form)
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
            'title' => 'PT. PANARUB | Ticket'
        ];

        return view('pages/chat', $data);
    }

    public function detailAssign($id_ticket)
    {
        $data = [
            'title' => 'PT. PANARUB | Ticket Detail',
            'ticket' => $this->TicketModel->getTicket($id_ticket)
        ];
        // dd(session()->get());

        return view('pages/ticketDetailAssign', $data);
    }

    public function assign()
    {
        $form = [];
        $status = 'approve';
        $data = [
            'title' => 'Ticket Approval | Jayanti Program',
            'ticket' => $this->TicketModel->getTicketStatus($status, $form),
            'assignTo' => $this->AccountModel->getAssignTo()
        ];

        dd($data['assignTo']);

        return view('pages/ticketAssign', $data);
    }

    public function assignSave($id)
    {
        $this->TicketModel->save([
            'id_ticket' => $id,
            'status' => 'proses',
            'id_assign' => $this->request->getPost('user')
        ]);
        session()->setFlashdata('tambahData', 'Data berhasil diassign.');
        return redirect()->to('/Ticket/approval');
    }
}
