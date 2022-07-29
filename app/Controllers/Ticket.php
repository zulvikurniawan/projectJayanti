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

    public function detail()
    {
        $data = [
            'title' => 'Ticket Detail | Jayanti Program'
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
}
