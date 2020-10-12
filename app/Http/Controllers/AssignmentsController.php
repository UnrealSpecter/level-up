<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assignment;
use App\Answer;

class AssignmentsController extends Controller
{

    public function markAsDone(Assignment $assignment)
    {
        if($assignment->markAsDone()){
            return response()->json(['success' => 'success']);
        }
        else {
            return response()->json(['error' => 'error']);
        }
    }

}
