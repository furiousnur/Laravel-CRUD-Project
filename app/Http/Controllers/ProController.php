<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;
use DB;
use App\Http\Controllers\delete;

class ProController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => [ 'index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profiles=Profile::orderby('id', 'asc')->paginate(3);
        return view('profiles.index')->with('profiles', $profiles);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $this->validate($request,[
                'name' => 'required',
                //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'position' => 'required',
                'dept' => 'required',
                'location' => 'required',
                'interest' => 'required'
            ]);

            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['imagename']);
            //$this->postImage->add($input);

        //Create Post
        $profile =new Profile;
        $profile->name = $request->input('name');

       $profile->file=$input['imagename'];
       //return back()->with('success','Image Upload successful');

        $profile->position = $request->input('position');
        $profile->dept = $request->input('dept');
        $profile->location = $request->input('location');
        $profile->interest = $request->input('interest');
        $profile->user_id  = auth()->user()->id;
        $profile->save();

        return redirect('/profiles')->with('success', 'Post created success');
        // Profile::create($request->all());

        // return redirect('/profiles')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Profile::find($id);
        return view('profiles.show')->with('post', $post);;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = Profile::find($id);

      //check for correct user
      if (auth()->user()->id !=$post->user_id){
          return redirect('/profiles')->with('error', 'unauthorized pages');
      }
      return  view('profiles.edit')->with('post', $post);
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
      $this->validate($request,[
               'name' => 'required',
               'position' => 'required',
               'dept' => 'required',
               'location' => 'required',
               'interest' => 'required'
           ]);

       //Create Post
       $profile =new Profile;
       $profile->name = $request->input('name');
       $profile->position = $request->input('position');
       $profile->dept = $request->input('dept');
       $profile->location = $request->input('location');
       $profile->interest = $request->input('interest');
       $profile->user_id  = auth()->user()->id;
       $profile->save();

       return redirect('/profiles')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Profile::find($id);
      $post->delete();
      return redirect('/profiles')->with('success', 'Post Removed');
    }
}
