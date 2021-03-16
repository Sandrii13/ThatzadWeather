<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrincipalController extends Controller
{

    public function index(Request $request)
    {
       $cp = $request['cp'];
       $top = $this->show();
       return view('detalle')->with('cp', $cp);
    }
    public function top(Request $request){

        $existe = DB::table('ciudades')
                    ->select('cp')
                    ->get();
        $ciudad = $request['ciudad'];
        $grado = $request['grado'];
        $cp = $request['cp'];

        if($existe == $cp){
            DB::table('ciudades')
            ->where('cp', $cp)
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

        return view('detalle');
    }

    public function show(){
        $top = DB::table('ciudades')
                    ->select('cp', 'ciudad', 'temperatura')
                    ->get();
        return view('detalle')->with('top', $top);
    }

}
