<?php

namespace App\Http\Controllers;

// libreria di laravel per lavorare con le date
use Carbon\Carbon;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        // settiamo una variabile con la data di oggi
        $oggi = Carbon::today();
        $treni = Train::where('data_partenza', '>=', $oggi)
            ->orderBy('data_partenza')
            ->orderBy('orario_partenza')
            ->get();

        return view('home', compact('treni'));
    }
}
