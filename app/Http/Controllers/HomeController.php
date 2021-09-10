<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class HomeController extends Controller
{
    public function index(){

        $allTravels =Trip::all();
        // dump($allTravels);
        return view('home', compact('allTravels'));
    }
}
