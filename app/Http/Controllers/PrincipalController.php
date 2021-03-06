<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrincipalController extends Controller
{

    public function index(Request $request)
    {
       $cp = $request['cp'];
       return view('detalle')->with('cp', $cp);
    }
    public function top(Request $request){

        $existe = DB::table('ciudades')
                    ->select('ciudad')
                    ->get();
        $ciudad = $request['ciudad'];
        $grado = $request['grado'];
        $cp = $request['cp'];

        foreach($existe as $exist){
            if($exist->ciudad == $ciudad){
                DB::table('ciudades')
                ->where('ciudad', $ciudad)
                ->update([
                    'ciudad' => $ciudad,
                    'temperatura' => $grado
                ]);
            }else{
                DB::table('ciudades')->insert([
                    'cp' => $cp,
                    'ciudad' => $ciudad,
                    'temperatura' => $grado
                ]);
            }
        }

        return view('detalle');
    }

    public function show(){
        $top = DB::table('ciudades')
                    ->select('cp', 'ciudad', 'temperatura')
                    ->orderBy('temperatura')
                    ->get();
        return $top;
    }

}
