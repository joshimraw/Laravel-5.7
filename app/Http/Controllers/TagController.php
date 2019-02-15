<?php

namespace App\Http\Controllers;

use App\igration;
use Illuminate\Http\Request;
use App\Tag;
use Session;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('tags.index')->withTags($tags);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:50'
        ));

        $tag = new Tag;
        $tag->name =  $request->name;
        $tag->save();

        Session::flash('success', 'Tag is added');
        return redirect()->route('tags.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\igration  $igration
     * @return \Illuminate\Http\Response
     */
    public function show(igration $igration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\igration  $igration
     * @return \Illuminate\Http\Response
     */
    public function edit(igration $igration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\igration  $igration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, igration $igration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\igration  $igration
     * @return \Illuminate\Http\Response
     */
    public function destroy(igration $igration)
    {
        //
    }
}
