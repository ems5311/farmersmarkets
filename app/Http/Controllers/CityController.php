<?php

namespace App\Http\Controllers;

use App\City;
use App\Farmer;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function show($stateName, $cityName)
    {
        $markets = Farmer::where('state', $stateName)
            ->where('city', $cityName)
            ->get();

        return view('markets', compact('stateName', 'cityName', 'markets'));
    }
}
