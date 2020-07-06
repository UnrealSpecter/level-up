<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ShowDashboard extends Controller
{
    public function __invoke(){
        return view('dashboard.index', compact('user', $user = auth()->user()));
    }
}
