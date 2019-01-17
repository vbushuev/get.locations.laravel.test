<?php

namespace App\Http\Controllers;

use vsb\Locations\LocationManager;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index( LocationManager $locations ) {

        return response()->json($locations->handle());
    }
}
