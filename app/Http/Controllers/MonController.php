<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonController extends Controller
{
    public function mon(){
        return view('softteam.index');
    }
}
