<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Module;

class DashboardController extends Controller
{
    public function __invoke(){

        $user = Auth::user()::with('levels.modules.lessons.subjects.resources', 'levels.modules.lessons.subjects.assignments')->get()->first();

        return view('users.index')->with('user', $user);
    }

    public function index(){

        $user = Auth::user()::with('levels.modules')->get()->first();

        return view('dashboard.index')->with('user', $user);
    }

    public function show($id){

        $module = Module::with('lessons.subjects.resources.tags', 'lessons.subjects.assignments.answers')->get()->first();

        return view('dashboard.show')->with('module', $module);
    }
}
