<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Hotel;

class HotelsController extends Controller
{
    public function index()
    {

      $hoteles = Hotel::all();

      return view('hotels.index', compact('hoteles'));
    }

    public function show(Hotel $hotel)
    {
      return view('hotels.show', compact('hotel'));
    }
}
