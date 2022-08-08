<?php

namespace App\Http\Controllers;

use App\Models\Select;
use App\Models\Team;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
//        $team = Select::all();
//        dd($team);
        return view('softteam.index');
    }
}
