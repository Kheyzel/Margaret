<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('backend.whatwedo.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.whatwedo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery = new Gallery();
        $gallery -> gallery_date = $request -> input('gallery_date');
        $gallery -> gallery_description = $request -> input('gallery_description');

        if($request->hasFile('gallery_image'))
        {
            $file = $request -> file('gallery_image');
            $filename = $file -> getClientOriginalName();
            $request -> gallery_image -> storeAs('gallery_images', $filename, 'public');
            $gallery -> gallery_image = $filename;
        }

        $gallery -> save();

        return redirect()->route('whatwedo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery = Galler::findOrFail($gallery -> id);
        if(\File::exists(public_path().'/storage/gallery_images/'.$gallery->gallery_image)){
            \File::delete(public_path().'/storage/gallery_images/'.$gallery->gallery_image);
        }
        $gallery->delete();
        return redirect()->route('whatwedo.index');
    }
}
