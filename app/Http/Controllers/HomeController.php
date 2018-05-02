<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
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
                <a class='btn btn-warning col-sm-2 col-md-6 col-lg-4' style='padding: 10px;'>SEE MORE CLASSES</a>
            </div>
        </div>";

        $teacherCounter = Teacher::scopeCounter();
        return view('main',compact('ourProgramsSubmit,teacherCounter'));
    }
}
