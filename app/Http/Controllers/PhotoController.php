<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{

    public function index(): Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('mangas.create');
    }

    /*public function image(Request $request)
    {
        // Get the file object from the request
        $file = $request->file('photo');

        // Generate a unique file name
        $fileName = sprintf("%s.%s", uniqid(), $file->getClientOriginalExtension());

        // Save the file to the local filesystem
        Storage::disk('public')->putFileAs('photos', $file, $fileName);
        $path = $file->store('photos', 'public');
    }*/


}
