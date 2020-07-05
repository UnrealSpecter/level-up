<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Answer;
use Illuminate\Http\Request;

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
