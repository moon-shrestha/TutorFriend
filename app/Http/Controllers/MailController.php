<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{

public function basic_email(Request $request){
    // dd('hii');
    // dd($request);
    $email=$request->input('email');
    $name=$request->input('name');

    $teacherEmail=$request->input('teacher');
    $teacherName=$request->input('teacherName');


    $request->session()->put('email', $email);
    $request->session()->put('teacher', $teacherEmail);
    $request->session()->put('teacherName', $teacherName);
    $request->session()->put('name', $name);




$data = array('email'=>$email, 'teacher'=>$teacherEmail,'body'=>'Hello '.$teacherName.'<br> The user' .$name. ' wants to connect with you');

Mail::raw([], function($message) {
    $message->to(session()->get('teacher'));
    $message->from('moon.shresth@gmail.com', 'Tutorfriend');
    $message-> cc(session()->get('email'));
    $message->subject("TutorConnect");
    $message->setBody('Hello '.session()->get('teacherName').'<br> The user '.session()->get('name'). ' wants to connect with you.', 'text/html' );
});

// Mail::send($messageBody, $data, function($message){
// $message->to(session()->get('teacher'));
// $message->from('moon.shresth@gmail.com', 'Tutorfriend');
// $message-> cc(session()->get('email'));
// });
return redirect('/')->with('success', 'Email Sent Successfully');
}



};
