<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Tutorfriend!';
        return view ('pages.index', compact('title'));
    }

    public function about(){
        $title = 'ABOUT';
        return view('pages.about', compact('title'));
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' =>  ['JAVA', 'Python', 'PHP']
        );
        return view('pages.services')-> with($data);
    }

    public function searchhome(){
        $title = 'Advanced Search';
        return view ('pages.searchhome', compact('title'));
    }



}
