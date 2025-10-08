<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class PageController extends Controller
{
    function home(): View {
        return view('home');
    }

    function welcome(): View {
        return view('welcome');
    }
}
