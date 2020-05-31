<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function view;

class WelcomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        return view('landing.home');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function shmegma()
    {
        return view('landing.shmegma');
    }
}
