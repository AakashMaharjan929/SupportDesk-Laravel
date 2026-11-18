<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Generator\Method;

class CustomerDashboardController extends Controller
{
    public function index(){
        return view('customer.dashboard');
    }
}
