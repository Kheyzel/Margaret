<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mission;
use App\Vision;

class AboutUsController extends Controller
{
    public function index()
    {
        $missions = Mission::all();
        $visions = Vision::all();
        return view('backend.about-us.index', compact('missions', 'visions'));
    }

}
