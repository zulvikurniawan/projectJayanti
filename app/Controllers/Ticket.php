<?php

namespace App\Controllers;

class Ticket extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Ticket | Jayanti Program'
        ];

        return view('pages/ticketView', $data);
    }

    public function list()
    {
        $data = [
            'title' => 'Ticket List | Jayanti Program'
        ];

        return view('pages/ticketList', $data);
    }

    public function Detail()
    {
        $data = [
            'title' => 'Ticket Detail | Jayanti Program'
        ];

        return view('pages/ticketDetail', $data);
    }
}