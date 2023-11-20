<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    //Action
    public function index()
    {
        $title = "Hoc Lap trinh laravel";
        $content = "Hoc Lap trinh anh Hoang";
        // $dataView = [
        //     'titleData' => $title,
        //     'contentData' => $content
        // ];

        return view('home', compact('title', 'content'));
        // return view('home')->with(['title' => $title, 'content' => $content]);
        // return View::make('home', compact('title', 'content'));

        // $contentView = view('home');
        // $contentView = $contentView->render();
        // dd($contentView);
        // echo $contentView;
        //return $contentView;
    }

    public function getNews()
    {
        return 'get tin tuc';
    }

    public function getCategory($id)
    {
        return 'get chuyen muc' . $id;
    }

    public function getProducts($id)
    {
        return view('clients.products.detail', compact('id'));
    }
}
