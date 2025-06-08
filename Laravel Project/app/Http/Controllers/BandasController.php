<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BandasController extends Controller
{
    //Return All Bands
    public function returnBands(){
        $allBands = DB::table('bandas')->get();

        return view('bands.all_bands', compact('allBands'));
    }


    //rota para a view para adicionar banda
    public function addBand()
    {
        return view('bands.add_band');
    }


    //rota para adicionar nova banda (formulario POST)
    public function createBand(Request $request){

        $request ->validate([
            'nome' => 'required|string|max:255',
            'numero_albuns' => 'required'
        ]);

        $photoPath=null;

        if($request->hasFile('foto')){
            $photoPath=Storage::putFile('userPhoto', $request->file('photo'));
        }

        DB::table('bandas')
            ->insert([
                'nome' => $request ->nome,
                'foto' => $photoPath,
                'numero_albuns' => $request->numero_albuns,
            ]);

        return redirect() -> route('bands') -> with('message', 'A new band was added!');
    }


    //ver banda

    //view com o id especifico de uma banda e os seus detalhes
    public function viewBand($id){
        $band = DB::table('bandas')
            ->where('id', $id)
            ->first();

        return view('bands.individual_band', compact('band'));
    }


    //view com formulario para dar update de uma banda
    public function updateBand(Request $request){

        $request->validate([
            'nome' => 'required|string|max:255',
            'numero_albuns' => 'required'
        ]);

//        $photoPath=null;
//
//        if($request->hasFile('foto')){
//            $photoPath=Storage::putFile('bandPhoto', $request->file('foto'));
//        }

        DB::table('bandas')
            ->where('id', $request -> id)
            ->update([
                'nome'=>$request ->nome,
                'numero_albuns'=> $request -> numero_albuns,
                'updated_at' =>now(),
//                'foto'=>$photoPath
            ]);


        return redirect() -> route('bands') -> with('message', 'Os detalhes da banda foram atualizados com sucesso!');

    }

}
