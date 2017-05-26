<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Menu;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        //$this->middleware('log')->only('index');
        //$this->middleware('subscribed')->except('store');

        Menu::macro('main', function () {
            return Menu::new()
                ->url('/administrator/index', 'Home')
                ->url('/administrator/index2', 'Home 2')
                ->url('/administrator/index3', 'Home 3')
                ->url('/administrator/index4', 'Home 4')
                ->setActiveFromRequest();
        });
    }

    //
    public function dashboard()
    {

    	return view('backEnd.dashboard');
    }

    public function getPage($page)
    {

        return view('backEnd.'.$page);
    }
}
