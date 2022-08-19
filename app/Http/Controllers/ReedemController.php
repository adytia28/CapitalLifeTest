<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReedemController extends Controller
{
    public function index() {
        return view('web.reedem.index');
    }
}
