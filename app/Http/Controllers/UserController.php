<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $users = User::with('lessons.subjects.assignments', 'lessons.subjects.resources')->get();
        // dd($users->first()->lessons->first()->pivot->is_done);
        return view('users.index')->with('users', $users);

    }
}
