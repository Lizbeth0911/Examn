<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function Api()
    {
    
        $datos = Http:: get('https://catfact.ninja/fact');
        // $datos->json();
        //  $datos = [];

        
        // return $datos;
        //return view('generic', ['datos' => $datos]);
        // return response()->json($datos);
        //$datos = Http::get('https://catfact.ninja/fact')->collect();
        $datos2 = json_decode($datos);
        // return $datos2;

        return view('generic', ['datos'=>$datos2]);
    }

    public function index()
    {
        return view('index');
    }
}
