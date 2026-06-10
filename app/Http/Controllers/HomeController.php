<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * Display the about page.
     */
    public function about(): View
    {
        return view('about');
    }

    /**
     * Display the contact page.
     */
    public function contact(): View
    {
        return view('contact');
    }
}
