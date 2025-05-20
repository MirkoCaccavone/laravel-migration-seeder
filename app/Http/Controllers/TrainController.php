<?php

namespace App\Http\Controllers;

// Importiamo Carbon per la gestione avanzata delle date in PHP
use Carbon\Carbon;
// Importiamo il modello Train per interagire con il database
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        // settiamo una variabile con la data di oggi
        $oggi = Carbon::today();

        // Query al database per ottenere i treni:
        // 1. where(): filtra i treni con data di partenza >= oggi
        // 2. orderBy(): ordina prima per data, poi per orario
        // 3. get(): esegue la query e recupera i risultati
        $treni = Train::where('data_partenza', '>=', $oggi)
            ->orderBy('data_partenza')
            ->orderBy('orario_partenza')
            ->get();

        // Passa i dati alla vista 'home' usando compact()
        // compact('treni') è equivalente a ['treni' => $treni]
        return view('home', compact('treni'));
    }
}
