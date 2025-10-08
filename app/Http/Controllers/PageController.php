<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function accueil()
    {
        return view('accueil');
    }

    public function fiche()
    {
        return view('fiche');
    }

    public function partager()
    {
        return view('partager');
    }

    public function reviser()
    {
        return view('reviser');
    }
}
