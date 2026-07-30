<?php

namespace App\Http\Controllers;

use Illuminate\View\View;


class HomeController extends Controller
{

    /**
     * Affiche la page d'accueil.
     */
    public function index(): View
    {
        return view('home.index');
    }

}
