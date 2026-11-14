<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Generator\Method;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard');
    }
}
