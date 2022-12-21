<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    public function create(): Factory|View|Application
    {
        return \view('mangas.create');
    }
    public function __construct(Request $request)
    {
        $this->request= $request;
    }

    public function upload(Request $request): RedirectResponse
    {


        /*$manga = (new Manga())->create([
            'owner_id'=>1,
            'name_genre'=>4,
            'manga_name'=>$this->request->get('manga_name'),
            'description'=>$this->request->get('description'),
            'image'=>$this->request->get('images')
        ]);*/


    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        $manga = (new Manga())->create([
            'name_genre'=>4,
            'owner_id'=>2,
            'manga_name'=>$this->request->get('manga_name'),
            'description'=>$this->request->get('description'),
            'path'=>public_path('images'),
            ]);
        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
        dd($this);
    }
}
