<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        // $users = User::with('lessons.subjects.assignments', 'lessons.subjects.resources')->get();
        // $user = User::with('lessons', 'subjects', 'assignments')->get()->first();

        $users = User::with('assignments', 'lessons.subjects.resources')->get();
        // dd($users);
        return view('users.index')->with('users', $users);

    }
}
