<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
public function index()
{
    $data = [
    "title" => "PGWEBL",
    ];
    // Check if user is logged in
    if (auth()->check()) {
        return view('index', $data);
    }else {
        return view('landing-page', $data);
}
}

public function table()
{
    $data = [
    "title" => "Table",
    ];
    return view('table', $data);
}
 // Metode untuk peta publik
public function indexPublic()
{
    $data = [
    "title" => "PGWEBL - Public Map",
    ];
    return view('index-public', $data);
}

// Metode untuk destinasi
public function destination()
{
    return view('destination');
}

// Metode untuk landing page
public function landingpage()
{
    return view('landing-page');
}
}


