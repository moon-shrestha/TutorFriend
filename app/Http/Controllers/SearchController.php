<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Post;
use Illuminate\Support\Facades\DB;
class SearchController extends Controller
{
    
    public function filter(Request $request)
    {
        $input=$request->all();
        // dd($input);
        $search = $request->input('subject');
        // dd($search);
        

        $posts = DB::table('posts')->select(DB::raw("*"))->where('subject', '=', $search)->get();
        
        return view('posts.search', ['posts' => $posts]);

    }

    public function advancesearch(Request $request, Post $post)
    {

        $this->validate($request, [
            'subject'=> 'required',
            'class'=> 'required',
            'time'=> 'required',
            'hour'=> 'required',
            'available_days'=> 'required',
            'location'=> 'required'

        ]);
    
    $post = $post->newQuery();

    // Search for a post based on their subject.
    if ($request->has('subject')) {
        $post->where('subject', $request->input('subject'));
    }

    // Search for a post based on their class.
    if ($request->has('class')) {
        $post->where('class', $request->input('class'));
    }

    // Search for a post based on their time.
    if ($request->has('time')) {
        $post->where('time', $request->input('time'));
    }

    // Search for a post based on hour
    if ($request->has('hour')) {
        $post->where('hour', $request->input('hour'));
    }

    // Search for a post based on available day
    if ($request->has('available_day')) {
        $post->where('available_day', $request->input('available_day'));
    }

     // Search for a post based on location
     if ($request->has('location')) {
        $post->where('location', $request->input('location'));
    }

    return view('posts.search', ['posts' => $post->get()]);


    }
   
}
