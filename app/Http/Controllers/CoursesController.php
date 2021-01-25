<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Inertia\Inertia;

class CoursesController extends Controller
{
    public function index()
    {
        return Inertia::render('Courses/Index', [
           'courses' => Course::with('modules')->get()
        ]);
    }
}
