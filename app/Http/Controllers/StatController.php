<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StatController extends Controller
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
     * Show the stats page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array('activePage'=>'stats');
        return view('stats', $data);
    }
}
