<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Edu;
use App\Models\Qualification;
use App\Models\Activity;
use App\Models\Interest;




class IndexController extends Controller
{
    function about()
    {
        $about = About::all();

        return view('frontend.about', compact('about'));

    }

    function edu()
    {
        $edu = Edu::all();

        return view('frontend.education', compact('edu'));

    }

    function qualification()
    {
        $qualification = Qualification::all();

        return view('frontend.qualification', compact('qualification'));

    }

    function act()
    {
        $activity = Activity::all();
        return view('frontend.activities', compact('activity'));
        //return DB::select("select * from abouts");
    }

    function int()
    {
        $interest = Interest::all();
        return view('frontend.interest', compact('interest'));
    }





}
