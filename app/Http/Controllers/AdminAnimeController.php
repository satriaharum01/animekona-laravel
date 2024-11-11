<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Use Models
use App\Models\Anime;

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
        $this->data['animes'] = Anime::orderBy('title')->paginate(10);

        return view('admin/anime/index', $this->data);
    }


}
