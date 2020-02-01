<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class channelController extends Controller
{
    public function index(){
        return view('channel');
    }
}
