<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function show($stateName, $cityName)
    {
        $city = City::where('name', $cityName)
            ->where('state', $stateName)
            ->firstOrFail();

        return view('markets', compact('city'));
    }
}
