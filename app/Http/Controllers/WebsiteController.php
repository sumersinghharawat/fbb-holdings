<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Slider;
use App\Models\Team;
use App\Models\User;
use App\Models\Website;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($locale = null)
    {
        //
        if(session()->get('locale')){
            $locale = session()->get('locale');
            app()->setLocale($locale);
        }

        if (isset($locale) && in_array($locale, config('app.available_locales') ?? [])) {
            app()->setLocale($locale);
        }

        $userdata = User::first();
        $sliders = Slider::where(['status'=>1])->get();
        $businesses = Business::where(['status'=>1])->inRandomOrder()->get();
        $website = Website::first();

        return view('websites.website',['user'=>$userdata, 'sliders'=>$sliders, 'businesses'=>$businesses, 'website'=>$website]);
    }


    public function aboutus()
    {
        //
        if(session()->get('locale')){
            $locale = session()->get('locale');
            app()->setLocale($locale);
        }

        if (isset($locale) && in_array($locale, config('app.available_locales') ?? [])) {
            app()->setLocale($locale);
        }

        $userdata = User::first();
        $website = Website::first();
        $teams = Team::get();
        return view('websites.about',['user'=>$userdata, 'website'=>$website, 'teams'=>$teams]);
    }


    public function ourbusiness()
    {
        //
        if(session()->get('locale')){
            $locale = session()->get('locale');
            app()->setLocale($locale);
        }

        if (isset($locale) && in_array($locale, config('app.available_locales') ?? [])) {
            app()->setLocale($locale);
        }

        $userdata = User::first();
        $businesses = Business::where(['status'=>1])->get();
        $website = Website::first();
        return view('websites.ourbusiness',['user'=>$userdata, 'businesses'=>$businesses, 'website'=>$website]);
    }

    public function contactus()
    {
        //
        if(session()->get('locale')){
            $locale = session()->get('locale');
            app()->setLocale($locale);
        }

        if (isset($locale) && in_array($locale, config('app.available_locales') ?? [])) {
            app()->setLocale($locale);
        }

        $userdata = User::first();
        $website = Website::first();
        return view('websites.contactus',['user'=>$userdata, 'website'=>$website]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Website $website)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Website $website)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Website $website)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Website $website)
    {
        //
    }
}
