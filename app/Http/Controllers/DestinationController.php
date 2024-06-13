<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function artomoro()
{
    return view('destination.ayam_pedas_artomoro');
}

public function ayammertua()
{
    return view('destination.ayam_mertua');
}

public function warungsambalbakar()
{
    return view('destination.warung_sambal_bakar_yogyakarta');
}

public function richeese()
{
    return view('destination.richeese');
}

public function preksu()
{
    return view('destination.preksu');
}

public function kfc()
{
    return view('destination.kfc_ugm');
}
}
