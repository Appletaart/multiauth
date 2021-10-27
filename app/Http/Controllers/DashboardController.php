<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('workgever')){
            return view('workgeverdash');
        }elseif(Auth::user()->hasRole('caretaker')){
            return view('caretakerdash');
        }elseif(Auth::user()->hasRole('admin')){
            return view('dashboard');
        }
    }
}
