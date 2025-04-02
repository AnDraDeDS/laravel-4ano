<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class CadastroAnimal extends Controller
{
    function animal(){
        return view('animal');
    }
    function addAnimal(Request $request){
        $animal = new Animal();
        // dd($request->all());
        $animal->create($request->all());

        return view('animal');
    }
}
