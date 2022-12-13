<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    public function create(): Factory|View|Application
    {
        return \view('mangas.create');
    }
}
