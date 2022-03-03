<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome');

    }
    public function friendsPage()
    {
        return view('pages.friends');
    }
    public function storiesPage(){
        return view('pages.stories');
    }
    public function groupsPage(){
        return view('pages.groups');
    }
    public function profilePage(){
        return view('pages.profile');
    }
    public function emailBox(){
        return view('pages.emailpages.emailbox');
    }
    public function emailOpen(){
        return view('pages.emailpages.emailopen');
    }
    public function messages()
    {
        return view('pages.messages');
    }
}
