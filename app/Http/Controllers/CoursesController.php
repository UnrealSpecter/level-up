<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Inertia\Inertia;

class CoursesController extends Controller
{
    public function index()
    {
        // $user = auth()->user():with('courses.levels.modules.lessons.subjects.assignments');

        // $user = Course::with('levels.modules')->get();

        // dd(Course::with('levels.modules.lessons.subjects')->get());
        // dd($user);

        // return User::with([
        //     'courses' => function ($query) {
        //         $query
        //             ->select('id', 'fieldname')
        //             ->where('id', $user->id);
        //     },
        //     'city.companies' => function ($query) {
        //         $query->select('id', '...');
        //     },
        //     'city.companies.persons' => function ($query) {
        //         $query->select('id', '...');
        //     }
        // ])->get();

        return Inertia::render('Courses/Index', [
           'courses' => Course::with('levels.modules.lessons.subjects', 'levels.competences')->get()
        ]);
    }
}
