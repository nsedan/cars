<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class PagesController extends Controller
{
    public function cars(){
        $data = Car::all();
        return view('pages.cars')->with('cars', $data);
    }

    public function form(){
        return view('pages.form');
    }
}
