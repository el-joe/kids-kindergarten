<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teachers;
use App\Classes;
use App\Gallery;
use App\Contact;
class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourProgramsSubmit = "<div class='row'>
            <div class='col'  align='center'>
                <a href='". route('classes') ."' class='btn btn-warning col-sm-2 col-md-6 col-lg-4' style='padding: 10px;'>SEE MORE CLASSES</a>
            </div>
        </div>";

        $teacherCounter = Teachers::Counter();

        $classCounter   = Classes::all()->count();

        $classes = Classes::inRandomOrder()->take(3)->get();

        $galleries = Gallery::inRandomOrder()->take(3)->get();

        $contacts   = Contact::inRandomOrder()->take(3)->get();

        return view('main',compact('ourProgramsSubmit','teacherCounter','classCounter','classes','galleries','contacts'));
    }


}
