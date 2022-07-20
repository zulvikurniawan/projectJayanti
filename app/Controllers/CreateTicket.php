<?php

namespace App\Controllers;

class CreateTicket extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Create Ticket | Jayanti Program'
        ];

        return view('pages/createTicketView', $data);
    }
}
