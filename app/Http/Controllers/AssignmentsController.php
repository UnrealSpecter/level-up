<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Answer;
use Illuminate\Http\Request;

class AssignmentsController extends Controller
{
    // public function index(){
    //     $assignments = Assignment::all();
    //     return response()->json($assignments);
    // }

    public function show($id){
        $assignment = Assignment::findOrFail($id);
        $answer = Answer::findOrFail($id);
        $assignment->check($answer);
        if($assignment->check($answer)){
            return response()->json(['success' => 'success']);
        }
        else {
            return response()->json(['error' => 'error']);
        }
    }

    public function update($id, Request $request)
    {
        $assignment = Assignment::find($id);
        $answer = Answer::find($request->answer['id']);
        if($assignment->check($answer)){
            return response()->json(['success' => 'success']);
        }
        else {
            return response()->json(['error' => 'error']);
        }

    }

    // public function checkAssignment(Request $request){
    //     // $assignment = Assignment::findOrFail($id);
    //     // $data = $request->all();
    //     // if($assignment->check($data->answer))
    //     // {
    //     return response()->json([$request->all()]);
    //     // }
    //     // else {
    //     //     return response()->json([
    //     //         'error' => 'error'
    //     //     ]);
    //     // }
    // }
}
