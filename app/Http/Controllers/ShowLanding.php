<?php

namespace App\Http\Controllers;

use Inertia\Inertia;


class ShowLanding extends Controller
{
    public function __invoke(){

        return Inertia::render('Landing/Index');

    }

}
