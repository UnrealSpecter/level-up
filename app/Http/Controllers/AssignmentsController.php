<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assignment;
use App\Answer;
use Redirect;

class AssignmentsController extends Controller
{

    public function markAsDone(Assignment $assignment)
    {
        if($assignment->markAsDone()){
            return Redirect::back();
        }
        else {
            return abort(404);
        }
    }

}
