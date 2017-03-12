<?php

namespace App\Http\Controllers;

use App\City;
use App\Market;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function show($stateName, $cityName)
    {
        $markets = Market::where('state', $stateName)
            ->where('city', $cityName)
            ->get();

        return view('markets', compact('stateName', 'cityName', 'markets'));
    }
}
