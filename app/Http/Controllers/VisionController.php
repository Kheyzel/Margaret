<?php

namespace App\Http\Controllers;

use App\Vision;
use Illuminate\Http\Request;

class VisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about-us.create-vision');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vision = new Vision;
        $vision -> vision = $request -> vision;
        $vision -> save();

        return redirect()->route('about-us.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function show(Vision $vision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vision = Vision::findOrfail($id);
        return view('backend.about-us.edit-vision', compact('vision'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vision = Vision::findOrfail($id);
        $vision->update($request->all());
        return redirect()->route('about-us.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vision $vision)
    {
        $vision->delete();
        return redirect()->route('about-us.index');
    }
}
