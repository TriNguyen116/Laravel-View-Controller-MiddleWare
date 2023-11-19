<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Action
    public function index()
    {
        return 'Home222';
    }

    public function getNews()
    {
        return 'get tin tuc';
    }

    public function getCategory($id)
    {
        return 'get chuyen muc' . $id;
    }
}
