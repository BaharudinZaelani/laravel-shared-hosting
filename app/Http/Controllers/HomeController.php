<?php

namespace App\Http\Controllers;

use App\Http\Services\XenditService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view("welcome");
    }
}
