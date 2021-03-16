<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{

    public function index(Request $request)
    {
       $cp = $request['cp'];

       return view('detalle')->with('cp', $cp);
    }

}
