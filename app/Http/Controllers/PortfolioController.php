<?php

namespace App\Http\Controllers;

use App\Models\ExperiencePro;
use App\Models\Formation;
use App\Models\Realisation;
use App\Models\Veille;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function displayData()
    {
        $formations = Formation::all();
        $experiences = ExperiencePro::all();
        $realisations = Realisation::all();
        $veilles = Veille::all();
        return view('accueil', ['formations' => $formations, 'experiences' => $experiences, 'realisations' => $realisations, 'veilles' => $veilles]);
    }
}
