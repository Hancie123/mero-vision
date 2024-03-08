<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechnologyStackController extends Controller
{
    public function index(){
        return view('technology_stack');
    }
}