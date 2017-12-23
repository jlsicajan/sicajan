<?php

namespace App\Http\Controllers;

use App\Portafolio;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    //

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ['pages' => Portafolio::all()];
        return view('cv.portfolio')->with($data);
    }
}
