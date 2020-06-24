<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Module;
use App\Assignment;
use App\User;
use App\Lesson;
use App\Course;
use App\Answer;
use App\Tag;

class DashboardController extends Controller
{
    // VOTE TESTING
    public function vote(){
        $exists = $resources->votes()->where('products.id', $productId)->exists();
    }

    public function index(){

        $user = Auth::user()::with('levels.modules')->get()->first();
        $courses = Course::with('modules')->get();

        $collection = [
            'user' => $user,
            'courses' => $courses
        ];

        return view('dashboard.index')->with($collection, 'collection');
    }

    public function show($id){
        $module = Module::with('lessons.subjects.assignments.answers', 'lessons.subjects.resources.tags', 'introduction')->get()->find($id);

        return view('dashboard.show')->with('module', $module);
    }
}
