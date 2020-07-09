<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;

use App\Module;
use App\Level;
use App\Answer;

class ModulesController extends Controller
{
    public function index()
    {
        $levels = Level::with('modules')
            ->get()
            ->map->only('id', 'title', 'description', 'modules');
            
        return view('modules.index', compact('levels', $levels));
    }



    public function show($id)
    {
        $module = Module::with('introduction', 'lessons.subjects.assignments.answers', 'lessons.subjects.materials.tags')
            ->get()
            ->find($id);

        return view('modules.show')->with('module', $module);
    }

    public function fetchData($id){
        $module = Module::with('introduction', 'lessons.subjects.assignments.answers', 'lessons.subjects.materials.tags')
            ->get()
            ->find($id);

        return response()->json($module);
    }

    //backup
    // public function index()
    // {
    //     $levels = Level::with('modules')
    //         ->get()
    //         ->map->only('id', 'title', 'description', 'modules');
    //
    //     return View::component('Levels', ['levels' => $levels]);
    // }
    //
    // public function show($id)
    // {
    //     $module = Module::with('introduction', 'lessons.subjects.assignments.answers', 'lessons.subjects.materials.tags')
    //         ->get()
    //         ->find($id);
    //
    //     return View::component('Module', [
    //         'data' => $module,
    //     ]);
    // }

}
