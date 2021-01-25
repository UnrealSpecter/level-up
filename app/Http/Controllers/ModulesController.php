<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;

use App\Module;
use App\Level;
use App\Answer;
use Inertia\Inertia;

class ModulesController extends Controller
{

    public function show($id)
    {
        return Inertia::render('Modules/Show', [
            'module' => Module::with('lessons.subjects.assignments.answers', 'lessons.subjects.materials.tags')->get()->find($id)
        ]);
    }

    public function fetchData($id)
    {
        $module = Module::with('lessons.subjects.assignments.answers', 'lessons.subjects.materials.tags')
            ->get()
            ->find($id);

        return response()->json($module);
    }

}
