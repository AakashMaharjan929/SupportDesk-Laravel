<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Generator\Method;

class AdminDashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
}
