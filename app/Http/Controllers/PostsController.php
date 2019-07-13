<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class PostsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts= Post::orderBy('tutor_post', 'des')->get();
        $posts= Post::orderBy('created_at', 'des')->paginate(5);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'subject'=> 'required',
            'class'=> 'required',
            'time'=> 'required',
            'hour'=> 'required',
            'available_days'=> 'required',
            'location'=> 'required'

        ]);
        //Create post
        $post= new Post;
        $post->subject = $request->input('subject');
        $post->class = $request->input('class');
        $post->time = $request->input('time');
        $post->hour= $request->input('hour');
        $post->available_days = $request->input('available_days');
        $post->location = $request->input('location');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/profile')->with('success', 'Post Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        //check for correct user
        if(auth()->user()->id != $post->user_id){
        return redirect('/posts')->with('error', 'Unauthorized Page');
        }
    return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'subject'=> 'required',
            'class'=> 'required',
            'time'=> 'required',
            'available_days'=> 'required',
            'location'=> 'required'

        ]);
        //Create post
        $post= new Post;
        $post->subject = $request->input('subject');
        $post->class = $request->input('class');
        $post->time = $request->input('time');
        $post->available_days = $request->input('available_days');
        $post->location = $request->input('location');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/profile')->with('success', 'Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        if(auth()->user()->id != $post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
            }

        return redirect('/profile')->with('success', 'Post Deleted Successfully');
    }
}
