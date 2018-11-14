<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Salle as Salle;
Use App\Status as Status;
Use App\Positions as Positions;


class View extends Controller
{
    public function index()
    {
        $salle = Salle::all();
        $status = Status::all();
        $positions = Positions::all();
        return view('salle', [
            "salle" => $salles,
            "status" => $status,
            "positions" => $positions,
        ]);
    }

       public function deleteSalle(Request $request){
        \App\Salle::destroy($request->input('id'));
        return redirect ('/Salle');
    }

     public function updateFrom(Request $request){

        $salle = Salle::find($request->input('id'));
        $status = Status::all();
        $positions = Positions::all();
        return view('update', [
            'salles' => $salles,
            'status' => $status,
            'postions' => $positions,
            ]);
    }
}