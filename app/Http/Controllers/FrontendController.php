<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mission;
use App\Vision;
use App\Gallery;
use App\Program;
use App\Organization;
use App\Calendar;
use App\Contact;

class FrontendController extends Controller
{
    public function index()
    {
        $missions = Mission::all();
        $visions = Vision::all();
        $galleries = Gallery::all();
        $programs = Program::all();
        $organizations = Organization::all();
        $calendars = Calendar::orderBy('act_date', 'asc')->get();
        $month = Calendar::all()->first();
        $contacts = Contact::all();
        return view('frontend.index', compact('missions', 'visions', 'galleries', 'programs', 'organizations','calendars','month', 'contacts'));
    }
}
