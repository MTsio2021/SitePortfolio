<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function displayData()
    {
        $formations = Formation::all();
        return view('accueil', ['formations' => $formations]);
    }
}
