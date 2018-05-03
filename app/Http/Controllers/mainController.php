<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Teachers;
use App\Classes;
use App\Gallery;
use Illuminate\Support\Facades\Session;

class mainController extends Controller
{
    //
    public function contactShow()
    {
    	$header = 'Our Contact';
		$headerContent = 'Get in Touch';
		return view('contact',compact(['header','headerContent']));
    }

    public function contactStore(Request $request)
    {
    	$input = $request->all();

    	if($file = $request->file('avatar'))
    	{
    		$name = $file->getClientOriginalName();

    		$file->move('images',$name);

    		$input['avatar'] = $name;
    	}

    	$contact = new Contact();
    	$contact->name = $input['name'];
    	$contact->email = $input['email'];
    	$contact->phone = $input['phone'];
    	$contact->avatar = $input['avatar'];
    	$contact->comment = $input['comment'];
    	$contact->save();

    	return redirect()->route('contact')->with('success','The Message Has been Sent !!');


    }

    public function about()
    {
        $header = 'About Us';
        $headerContent = 'Welcome to Kids';
        $teacherCounter = Teachers::Counter();

        $classCounter   = Classes::all()->count();
        $contacts   = Contact::inRandomOrder()->take(3)->get();

        return view('aboutUs',compact('header','headerContent','teacherCounter','classCounter','contacts'));
    }

    public function class()
    {
        $header = 'Our Programs';
        $headerContent = 'Popular Classes';
        $ourProgramsSubmit='';
        $classes = Classes::inRandomOrder()->get();

        return view('classes',compact(['header','headerContent','ourProgramsSubmit','classes']));
    }

    public function teacher()
    {
        $header = 'Our Staff';
        $headerContent = 'Meet Teachers';
        $teachers = Teachers::inRandomOrder()->get();
        return view('teachers',compact(['header','headerContent','teachers']));
    }

    public function gallery()
    {
        $header = 'Our Gallery';
        $headerContent = 'Moment from Kids';
        $galleries = Gallery::inRandomOrder()->take(3)->get();
        return view('gallery',compact(['header','headerContent','galleries']));
    }
}
