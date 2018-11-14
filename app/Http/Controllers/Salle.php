<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class Serie extends Controller
{

   public function deleteSalles(Request $request){
        \App\Serie::destroy($request->input('id'));
        return redirect ('/series');
    }
    public function Update(){
        $salle = \App\Salle::find($request->input('id'));
        $salle->name = $request->input('title');
        $salle->save();
        $salle->status()->detach();
        $salle->positions()->detach();
        $salle->status()->attach($request->input('status'));
        $salle->position()->attach($request->input('positions'));
        return redirect('/salles');
    }
}
