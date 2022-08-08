<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function PHPUnit\Framework\returnValue;

class AboutController extends Controller
{
    public function about(){
        return view('softteam.about');
    }
}
