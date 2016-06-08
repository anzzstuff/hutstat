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

    public function index()
    {
        $data = array('activePage'=>'matches');
        return view('matches.matches', $data);
    }

    public function add()
    {
        $data = array('activePage'=>'addmatch');
        return view('matches.addmatch', $data);
    }    
}
