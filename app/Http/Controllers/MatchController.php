<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MatchController extends Controller
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
     * Show recent matches.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('matches.matches');
    }

    /**
     * Show recent matches.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('matches.addmatch');
    }    
}
