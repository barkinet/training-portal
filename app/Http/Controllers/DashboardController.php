<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Controls the general dashboard

    public function index() {
      //First thing the user sees when they log in
      return view('dashboard.index');
    }

}
