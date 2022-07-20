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
}
