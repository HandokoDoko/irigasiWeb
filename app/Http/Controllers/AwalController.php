<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Irigasi;
use App\Http\Requests;

class AwalController extends Controller
{

    public function data_irigasi()
    {
        $irgs=Irigasi::where("kewenangan",'=',1)->get();
         return view('data_irigasi')->with(['irgs'=> $irgs]);
        //return view('data_irigasi');
    }

    public function awal_data_prov()
    {
        $irgs=Irigasi::where("kewenangan",'=',2)->get();
        //dd($irgs);
        return view('awal_data_prov')->with(['irgs'=> $irgs]);
    }

    public function awal_data_kab()
    {
        $irgs=Irigasi::where("kewenangan",'=',3)->get();
        return view('awal_data_kab')->with(['irgs'=> $irgs]);
    }
}