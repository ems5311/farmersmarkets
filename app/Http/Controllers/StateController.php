<?php

namespace App\Http\Controllers;

use App\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index()
    {
        $states = State::all();
        $split = ceil($states->count() / 3);
        $stateColumns = $states->chunk($split);
        return view('index', compact('stateColumns'));
    }

    public function show($name)
    {
        $state = State::where('name', $name)->firstOrFail();
        $cities = $state
            ->cities()
            ->paginate(50);

        return view('show', compact('state', 'cities'));
    }
}
