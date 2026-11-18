<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Generator\Method;

class AgentDashboardController extends Controller
{
    public function index(){
        return view('agent.dashboard');
    }
}
