<?php

namespace agendaconsulta\Http\Controllers;

use Illuminate\Http\Request;
use agendaconsulta\Consultas;
use agendaconsulta\Http\ConsultasRequest;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
