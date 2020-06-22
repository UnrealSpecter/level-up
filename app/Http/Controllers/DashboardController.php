<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Module;
use App\Assignment;
use App\User;
use App\Lesson;

class DashboardController extends Controller
{
    // public function __invoke(){
    //
    //     $user = Auth::user()::with('levels.modules.lessons.subjects.resources', 'levels.modules.lessons.subjects.assignments')->get()->first();
    //
    //     return view('users.index')->with('user', $user);
    // }

    public function index(){

        $user = Auth::user()::with('levels.modules')->get()->first();

        return view('dashboard.index')->with('user', $user);
    }

    public function show($id){

        $module = Module::findOrFail($id)->load('lessons.subjects.assignments');

        // dd($module);

        // $user = Answer::findOrFail(300)
        //     ->load('subjects.lessons.modules.levels.users')
        //     ->subjects->first()
        //     ->lessons->first()
        //     ->modules->first()
        //     ->levels->first()
        //     ->users->first();

        // dd($user);

        // dd($user->levels->first()->modules->first()->lessons->first()->subjects->first()->assignments->first());

        $assignment = Assignment::findOrFail(2)->load('subjects.lessons.modules');

        //if answer is_correct
        dd($assignment->subjects->first()->pivot->is_done);

        $subject->assignments
        //update assignment is done

        //all assignments done? yes or no.


        //vue root components sends up a message to update

        return view('dashboard.show')->with('module', $module);
    }
}
