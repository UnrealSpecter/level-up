<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ShowDashboard extends Controller
{
    public function __invoke(){

        $user = auth()->user();

        return view('dashboard.index', compact('user', $user));
    }
}
