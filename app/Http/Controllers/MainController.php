<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{

    private Request $request;


    public function __construct(Request $request)
    {
        $this->request= $request;
    }



    public function index(Request $request): View
    {
        return view('home');
    }

    public function index2(): Factory|View|Application
    {
        return view('profile');
    }

    public function login(Request $request): View
    {
        return \view('auth.login');
    }

    public function register(Request $request): View
    {
        return \view('auth.register');
    }

    public function authorization(): RedirectResponse
    {
        $user = User::whereUsername($this->request->get('username'))->first();
        if(!$user || !Hash::check($this->request->get('password'), $user->password)) {
            \Session::flash('error', 'Вы ввели неправильный логин или пароль');
            return redirect()->back();
        }
        \Auth::login($user);
        return to_route('home');
    }

    public function registration(Request $request): RedirectResponse
    {
        #$ipAddress = $request->ip();
        $user = (new \App\Models\User)->create([
            'username'=>$this->request->get('username'),
            'email'=>$this->request->get('email'),
            'password'=>Hash::make($this->request->get('password'))

        ]);
        $user->information()->create([
            'username'=>$request->get('username'),
            #$ipAddress=>$request->get('ip_address')
        ]);
        \Auth::login($user);
        return to_route('home');

    }

    public function logout(): RedirectResponse
    {
        \Auth::logout();
        return to_route('auth.logout');
    }


    public function profile(): Factory|View|Application
    {
        return view('profile');
    }

    public function catalog(): Factory|View|Application
    {
        return view('home');
    }

    public function read(): Factory|View|Application
    {
        return view('read');
    }
}
