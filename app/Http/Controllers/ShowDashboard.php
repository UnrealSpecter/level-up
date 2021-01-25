<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Inertia\Inertia;

class ShowDashboard extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Dashboard/Index', [
            'user' => auth()->user()
        ]);    
    }

}
