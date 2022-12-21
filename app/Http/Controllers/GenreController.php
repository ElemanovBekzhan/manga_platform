<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function create(): View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return \view('genre_page');
    }
    public function __construct(Request $request)
    {
        $this->request= $request;
    }
    public function genres()
    {
        $genre = (new Genre)->create([
            'genre_id'=>2,
           'name_genre'=>$this->request->get('genre'),
        ]);
        return to_route('home');
    }
}
