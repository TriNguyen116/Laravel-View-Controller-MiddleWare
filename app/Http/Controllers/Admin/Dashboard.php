<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function __construct()
    {
        // echo 'khoi dong';
        // return 'Khoi dong dashboad';
    }
    public function index()
    {
        return '<h2>Dashboard Welcome</h2>';
    }
}
