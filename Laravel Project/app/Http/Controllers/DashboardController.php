<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //return da view da homepage (welcome)
    public function returnHomeView(){

        return view('welcome');
    }
}
