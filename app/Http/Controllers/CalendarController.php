<?php

namespace App\Http\Controllers;

use App\Calendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calendars = Calendar::all();
        return view('backend.calendar.index', compact('calendars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.calendar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $calendar = new Calendar();
        $calendar -> act_date = $request -> input('act_date');
        $calendar -> act_description = $request -> input('act_description');

        if($request->hasFile('act_image'))
        {
            $file = $request -> file('act_image');
            $filename = $file -> getClientOriginalName();
            $request -> act_image -> storeAs('calendar_images', $filename, 'public');
            $calendar -> act_image = $filename;
        }

        $calendar -> save();

        return redirect()->route('calendar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function show(Calendar $calendar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $calendar = Calendar::findOrfail($id);
        return view('backend.calendar.edit', compact('calendar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calendar $calendar)
    {
        $calendar = Calendar::findOrFail($calendar -> id);

        $calendar->act_date = $request->input('act_date');
        $calendar->act_description = $request->input('act_description');

        if ($request->hasFile('act_image'))
        {
            $file = $request -> file('act_image');
            $filename = $file -> getClientOriginalName();
            $request -> act_image -> storeAs('calendar_images',$filename,'public');
            $calendar -> act_image = $filename;
        }

        $calendar->update();

        return redirect()->route('calendar.index', $calendar->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calendar $calendar)
    {
        $calendar = Calendar::findOrFail($calendar -> id);
        if(\File::exists(public_path().'/storage/calendar_images/'.$calendar->act_image)){
            \File::delete(public_path().'/storage/calendar_images/'.$calendar->act_image);
        }
        $calendar->delete();
        return redirect()->route('calendar.index');
    }
}
