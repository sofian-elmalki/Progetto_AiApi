<?php

namespace App\Http\Controllers;
use App\Models\Domanda;

class ApiController extends Controller
{
    public function apiCall(){
        $domande = Domanda::select('domanda','categoria','difficolta_richiesta','difficolta_utente')->get();
        $categorie = Domanda::all();
        $categorie['domanda'];
    }
}
