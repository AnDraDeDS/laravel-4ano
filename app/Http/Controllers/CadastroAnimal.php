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
    // apenas tinker

    function inserirAnimal(){
        $animal = new Animal();

        $animal->nome='Menina';
        $animal->cor='Marrom';
        $animal->peso='18kg';
        $animal->idade='12';
        $animal->especie='Cachorro';
        $animal->raca='Shih Tzu';
    }

    function SelectAnimais(){
        $animal = new Animal();
        $animais = new Animal();
        $animal::all();
        // $animal::find(1); // especifico

        foreach($animais as $animal){
            echo $animal->nome;
     
        }
        $animais2 = Animal::where('nome', '=', 'theo')->get();

    }
    
}
