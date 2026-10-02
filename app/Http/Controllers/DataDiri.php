<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class DataDiri extends Controller
{
    function index(){
        return view('datadiri');
    }
}
