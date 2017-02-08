<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use View;

class HomeController extends Controller
{
    public function index() {
    	return view('home.index');
    }
}
