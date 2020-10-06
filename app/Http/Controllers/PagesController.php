<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class PagesController extends Controller
{
    public function cars(){
        $car = Car::all();
        return view('pages.cars')->with('cars', $car);
    }
}
