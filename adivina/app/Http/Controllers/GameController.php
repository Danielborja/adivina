<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function choice(Request $request)
    {
        $machineNumber = $request->machineNumber;
        $tries = $request->tries;
        return view ("choice",compact('machineNumber','tries'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function game(Request $request)
    {  
        //Respuestas Máquina
        $machineNumber = $request->machineNumber;

        //N intentos
        $tries=$request->tries+1;
        
        //Respuestas Usuario
        $userChoice=intval($request->input('numberChoice'));


        $diferencia = abs($userChoice - $machineNumber);

     
    
    //Lógica    
    if($userChoice == $machineNumber){
        echo "Enhorabuena primo, has acertado en $tries intentos";
    } elseif ($diferencia <= 5) {
        echo "La diferencia es menor o igual a 5.";
    } elseif ($userChoice > $machineNumber){
        echo "Tira pabajo";
    } else {
        echo "Tira parriba";
    } 
    
return view ("game", compact('machineNumber','tries'));
}









    /**
     * Store a newly created resource in storage.
     */
   
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
