<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageLink;

class LandingController extends Controller
{
    public function index() {
        $icons = ImageLink::all();
        return view('welcome', [ 'icons' => $icons ]);
    }
}
