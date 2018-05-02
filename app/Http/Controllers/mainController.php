<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
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
}
