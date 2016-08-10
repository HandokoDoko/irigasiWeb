<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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

    public function detail()
    {
        return view('detail');
    }

    public function admin()
    {
        return view('admin');
    }

    public function data_provinsi()
    {
        return view('data_prov');
    }

    public function tambah_data()
    {
        return view('input_data');
    }
}
