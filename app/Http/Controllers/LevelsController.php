<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;

use Inertia\Inertia;

use Auth;
use App\Module;
use App\Level;
use App\Answer;

class LevelsController extends Controller
{

    public function index()
    {
        return Inertia::render('Levels/Index', [
            // 'user' => auth()->user()->with('levels.modules')->get()->first()
            'user' => Level::with('modules')->get()
        ]);
    }

    // public function show($id)
    // {
    //     $module = Module::with('lessons.subjects.assignments.answers', 'lessons.subjects.materials.tags')
    //         ->get()
    //         ->find($id);
    //
    //     return view('modules.show')->with('module', $module);
    // }

    // public function fetchData($id){
    //
    //     $module = Module::with('lessons.subjects.assignments.answers', 'lessons.subjects.materials.tags')
    //         ->get()
    //         ->find($id);
    //
    //     return response()->json($module);
    // }

}
