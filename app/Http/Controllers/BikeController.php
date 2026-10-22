<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bike;

class BikeController extends Controller
{
    function index()
    {
        $bikes = Bike::paginate(6);
        return view('page.bike', compact('bikes'));
    }

    function show($id)
    {   
        $bike = Bike::findOrFail($id);
        return view('page.bike-detail', compact('bike'));
    }
}
