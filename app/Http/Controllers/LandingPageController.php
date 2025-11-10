<?php

namespace App\Http\Controllers;

use App\Models\Mountain;
use App\Models\Gallery;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $mountains = Mountain::all();
        $galleries = Gallery::all();
        return view('landing.index', compact('mountains', 'galleries'));
    }
}
