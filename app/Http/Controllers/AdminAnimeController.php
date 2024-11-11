<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAnimeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('is_admin');
    }

    public function index()
    {
        $this->data['title'] = 'Anime Management';
        $this->data['sub_title'] = 'List Anime '.env('APP_NAME');

        return view('admin/anime/index', $this->data);
    }


}
