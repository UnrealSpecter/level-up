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

class DashboardController extends Controller
{
    // public function __invoke(){
    //
    //     $user = Auth::user()::with('levels.modules.lessons.subjects.resources', 'levels.modules.lessons.subjects.assignments')->get()->first();
    //
    //     return view('users.index')->with('user', $user);
    // }

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
        $answer = Answer::findOrFail(2);
        $assignment = Assignment::findOrFail(1);
        $assignment->check($answer);
        // $answer->assignments->first()->isDone($answer);
        // $answer = Answer::findOrFail($id);

        // if($answer->is_correct) {
        //     $assignment = $answer->assignments->first();
        //     $assignment->isDone($answer);
        //     // dd($assignment);
        // }
        // else {
        //     // dd('error, answer is not correct.', $answer);
        // }
        // dd($assignment);
        $module = Module::with('lessons.subjects.assignments.answers', 'lessons.subjects.resources.tags', 'introduction')->get()->find($id);
        // dd($module->lessons->first()->subjects->first()->assignments);
        //update from root instance up
        //seems bad to traverse down the whole fucking tree again.
        // updateAssignment



        //update from component instance
        //seems like the logical choice.
        //update assignment
        // $assignment = Assignment::findOrFail(1)->load('subjects.lessons.modules');
        // dd($assignment->subjects->first()->pivot);
        // $assignment->subjects()->updateExistingPivot($assignment->id, ['is_done' => 1]);
        // $assignment->pivot->is_done = 1;
        // $assignment->save();

        // check if subject needs to be updated
        // dd($assignment->subjects->first()->assignments);
        // $is_done = true;
        // foreach($asignment->subjects->first()->assignments as $assignment){
        //
        // }

        // foreach($assignment->subject){
        //
        // }
        //traverse up one to subject and check if all the subjects are done

        //notes
        //laravel loads the data in controller and pushes the json down to the vue components.
        // assignment component

        //update all the assignments for testing.

        // foreach($module->lessons->first()->subjects->first()->assignments as $assignment){
        //     $subject = $assignment->subjects()->first();
        //     $assignment->subjects()->updateExistingPivot($subject->id, ['is_done' => 0]);
        // }

        // $user = Answer::findOrFail(300)
        //     ->load('subjects.lessons.modules.levels.users')
        //     ->subjects->first()
        //     ->lessons->first()
        //     ->modules->first()
        //     ->levels->first()
        //     ->users->first();

        // dd($user);

        // dd($user->levels->first()->modules->first()->lessons->first()->subjects->first()->assignments->first());

        // $assignment = Assignment::findOrFail(2)->load('subjects.lessons.modules');

        //if answer is_correct
        // dd($assignment->subjects->first()->pivot->is_done);

        //update assignment is done

        //all assignments done? yes or no.

        //vue root components sends up a message to update

        return view('dashboard.show')->with('module', $module);
    }
}
