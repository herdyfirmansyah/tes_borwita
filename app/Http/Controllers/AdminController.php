<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use View;

class AdminController extends Controller
{
    public function __construct()
    {
        
    }

    function index()
    {  
    	return View::make('adminviews');
    }
}