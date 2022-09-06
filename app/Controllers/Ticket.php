<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Ticket extends BaseController
{

    protected $TicketModel;
    protected $AccountModel;
    protected $ChatModel;

    //ticket status start 

    public function index()
    {
        $form = $this->request->getPost();
        $data = [
            'title' => 'PT. PANARUB | Ticket Status',
            'statusTicket' => array_column($this->TicketModel->getStatusTiket(session()->get('user'), $form), 'COUNT', 'status')
        ];
        // dd($data['statusTicket']);
        // dd(array_key_exists('APROVAL', $data['statusTicket']));
        return view('pages/ticketView', $data);
    }

    public function list($status)
    {
        $form = $this->request->getPost();
        $data = [
            'title' => 'PT. PANARUB | Ticket List',
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

        return view('pages/ticketDetail', $data);
    }

    public function chatproses($id)
    {

        $data = [
            'title' => 'PT. PANARUB | Ticket',
            'ticket' => $this->TicketModel->getTicket($id),
        ];

        return view('pages/chatProses', $data);
    }

    public function history()
    {
        $status = $this->request->getPost();
        $data = [
            'title' => 'PT. PANARUB | Ticket History',
            'status' => $status,
            'ticket' => $this->TicketModel->getTicketStatusForm($status)
        ];
        return view('pages/ticketHistory', $data);
    }

    public function detailhistory($id_ticket)
    {
        $data = [
            'title' => 'PT. PANARUB | Ticket Detail',
            'ticket' => $this->TicketModel->getTicket($id_ticket)
        ];

        return view('pages/ticketDetailHistory', $data);
    }

    //ticket status end 
    //ticket create start

    public function create()
    {;
        $id_atasan = session()->getFlashdata("_ci_old_input");
        $emailHead = "";
        if ($id_atasan != null) {
            $emailHead = $this->AccountModel->getAdmin($id_atasan['post']['headFollup'])['email'];
        }
        $data = [
            'title' => 'PT. PANARUB | Create Ticket',
            'head' => $this->AccountModel->getAtasan(session()->get('user')),
            'emailHead' => $emailHead
        ];

        return view('pages/createTicketView', $data);
    }

    public function save()
    {
        if ($this->request->getVar('subaction') == "headFollup") {
            return redirect()->to("/Ticket/Create")->withInput();
        }
        // dd($this->request->getVar());
        $this->TicketModel->save([
            'status' => 'new',
            'type' => $this->request->getVar('type'),
            'category' => $this->request->getVar('category'),
            'priority' => $this->request->getVar('priority'),
            // 'urgency' => $this->request->getVar('urgency'),
            'email_followup' => $this->request->getVar('tempat_lahir'),
            'my_device' => $this->request->getVar('my_device'),
            'location' => $this->request->getVar('location'),
            'email_watcher' => $this->request->getVar('email_watcher'),
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'ip' => $this->request->getVar('ip'),
            'ext' => $this->request->getVar('ext'),
            'id_account' => session()->get('user')['id_account']
        ]);



        session()->setFlashdata('tambahData', 'Data berhasil ditambahkan.');
        return redirect()->to('/Ticket/Status/New');
    }

    //ticket create end
    //ticket report start

    public function report()
    {
        $form = $this->request->getPost();

        $ticket = $this->TicketModel->getTicketReport($form);
        $ticketCount = count($ticket);

        $data = [
            'title' => 'IT Service Report - PT. Panarub Industry',
            'form' => $form,
            'ticket' => $ticket,
            'totalData' => $ticketCount
        ];
        return view('pages/ticketReport', $data);
    }

    public function detailreport($id_ticket)
    {

        $data = [
            'title' => 'PT. PANARUB | Ticket Detail',
            'ticket' => $this->TicketModel->getTicket($id_ticket)
        ];

        return view('pages/ticketDetailReport', $data);
    }

    //ticket report end
    //ticket approval start
    public function approval()
    {
        $form = [];
        $status = 'NEW';
        $data = [
            'title' => 'PT. PANARUB | Ticket Approval',
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

    //ticket approval end
    //ticket assign start

    public function detailAssign($id_ticket)
    {
        $data = [
            'title' => 'PT. PANARUB | Ticket Detail',
            'ticket' => $this->TicketModel->getTicket($id_ticket),
            'assignTo' => $this->AccountModel->getAssignTo()
        ];
        // dd($data['assignTo']);

        return view('pages/ticketDetailAssign', $data);
    }

    public function assign()
    {
        $form = [];
        $status = 'approve';
        $data = [
            'title' => 'PT. PANARUB | Ticket Approval',
            'ticket' => $this->TicketModel->getTicketStatus($status, $form),
        ];


        return view('pages/ticketAssign', $data);
    }

    public function assignSave()
    {
        $this->TicketModel->save([
            'id_ticket' =>  $this->request->getPost('id'),
            'status' => 'proses',
            'id_assign' => $this->request->getPost('user')
        ]);
        session()->setFlashdata('tambahData', 'Data berhasil diassign.');
        return redirect()->to('/Ticket/approval');
    }

    //ticket assign end
    //ticket solved start

    public function solvenList()
    {
        $form = $this->request->getPost();

        (!array_key_exists('status', $form)) ? $form['status'] = 'proses' : '';

        $ticketList = $this->TicketModel->getTicketStatusForm($form);

        $data = [
            'title' => 'PT. PANARUB | Ticket Solved List',
            'ticket' => $ticketList,
        ];
        // dd($data['ticket']);

        return view('pages/ticketlistSolved', $data);
    }

    public function detailsolved($id)
    {
        $data = [
            'title' => 'PT. PANARUB | Ticket Detail',
            'ticket' => $this->TicketModel->getTicket($id),
        ];
        // dd($data['assignTo']);

        return view('pages/ticketDetailSolved', $data);
    }

    public function chat($id)
    {

        $data = [
            'title' => 'PT. PANARUB | Ticket',
            'ticket' => $this->TicketModel->getTicket($id),
        ];

        return view('pages/chatSolved', $data);
    }
    public function chatFench($id)
    {
        $data = [
            'title' => 'PT. PANARUB | Ticket',
            'ticket' => $this->TicketModel->getTicket($id),
            'chat' => $this->ChatModel->getChatTicket($id)
        ];

        return view('pages/chat', $data);
    }
    public function send()
    {

        $form = $this->request->getPost();
        if ($form != null) {
            $ticket =  $this->TicketModel->getTicket($form['id_ticket']);

            $this->ChatModel->save([
                'isi' => $form['chat2'],
                'id_ticket' => $ticket['id_ticket'],
                'pengirim_account_id' => session()->get('user')['id_account'],
            ]);
        }

        return redirect()->to('/Ticket/chat/' . $form['id_ticket']);
    }

    public function done()
    {
        $form = $this->request->getPost();

        $this->TicketModel->save([
            'id_ticket' => $form['id_ticket'],
            'status' => 'solved',
        ]);
        session()->setFlashdata('success', 'Data berhasil disolved.');
        return redirect()->to('/Ticket/solved');
    }

    //ticket solved end

}