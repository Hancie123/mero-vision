<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function index(){
        return view('our_team');
    }
}