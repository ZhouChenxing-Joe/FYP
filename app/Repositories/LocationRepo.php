<?php

namespace App\Repositories;

use App\Models\Nationality;
use App\Models\State;
use App\Models\City;

class LocationRepo
{
    public function getStates()
    {
        return State::all();
    }

    public function getAllStates()
    {
        return State::orderBy('name', 'asc')->get();
    }

    public function getAllNationals()
    {
        return Nationality::orderBy('name', 'asc')->get();
    }

    public function getCities($state_id)
    {
        return City::where('state_id', $state_id)->orderBy('name', 'asc')->get();
    }

}