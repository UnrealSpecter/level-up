<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course;

class CoursesController extends Controller
{
    public function index(){
        $courses = Course::with('modules')->get();
        return view('courses.index', compact('courses', $courses));
    }
}
