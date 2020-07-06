<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class CoursesController extends Controller
{
    public function index(){
        $users = User::with('levels.modules.');
        return view('courses.index', compact('users', $users));
    }
}
