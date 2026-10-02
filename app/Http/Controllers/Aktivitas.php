<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class Aktivitas extends Controller
{
    function index(){
        return view('aktivitas');
    }
}
