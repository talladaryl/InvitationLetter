<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InviteController extends Controller
{
    /**
     * Show the invitation page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('index');
    }
}