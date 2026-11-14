<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(){
        return "Ticket Generator";
    }

    public function create(){
        return "Ticket has been Generated";
    }
}
