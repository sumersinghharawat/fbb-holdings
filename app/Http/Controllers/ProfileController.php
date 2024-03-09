<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile');
    }

    public function website()
    {
        $website = Website::first();
        return view('website',['website'=>$website]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::user()->id,
            'current_password' => 'nullable|required_with:new_password',
            'new_password' => 'nullable|min:8|max:12|required_with:current_password',
            'password_confirmation' => 'nullable|min:8|max:12|required_with:new_password|same:new_password'
        ]);


        $user = User::findOrFail(Auth::user()->id);
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');

        if (!is_null($request->input('current_password'))) {
            if (Hash::check($request->input('current_password'), $user->password)) {
                $user->password = $request->input('new_password');
            } else {
                return redirect()->back()->withInput();
            }
        }

        $user->save();

        return redirect()->route('profile')->withSuccess('Profile updated successfully.');
    }

    public function updatewebsite(Request $request){


        $validation = Validator::make($request->all(), [
            'websitename' => 'required|string|max:255',
            'websiteemail' => 'required|string|max:255',
            'websitecontact' => 'required|string|max:255',
            'websitetiming' => 'required|string|max:255',
            'websitelocation' => 'required|string|max:255',
            'websitelocationiframe' => 'required|string|max:255',
            // 'websitelogo' => 'image|mimes:png,jpg,jpeg',
            // 'websitefav' => 'image|mimes:png,jpg,jpeg',
            // 'websitelogofooter' => 'image|mimes:png,jpg,jpeg',
            'websitefacebook' => 'required|string|max:255',
            'websitetwitter' => 'required|string|max:255',
            'websiteinstagram' => 'required|string|max:255',
            'websiteyoutube' => 'required|string|max:255',
        ]);


        if($validation->fails()){
            return view('website',['errors'=>$validation->errors(),'request'=>$request]);
        }

        $data = [];
        if($request->hasFile('websitelogo')){
            $imageName1 = (time()+1).'-websitelogo.'.$request->websitelogo->extension();
            $request->websitelogo->move(public_path('images/website/'), $imageName1);
            $data['websitelogo'] = asset('images/website/'.$imageName1);
        }

        if($request->hasFile('websitefav')){
            $imageName1 = (time()+1).'-websitefav.'.$request->websitefav->extension();
            $request->websitefav->move(public_path('images/website/'), $imageName1);
            $data['websitefav'] = asset('images/website/'.$imageName1);
        }

        if($request->hasFile('websitelogofooter')){
            $imageName1 = (time()+1).'-websitelogofooter.'.$request->websitelogofooter->extension();
            $request->websitelogofooter->move(public_path('images/website/'), $imageName1);
            $data['websitelogofooter'] = asset('images/website/'.$imageName1);
        }

        $data['websitename'] = $request->websitename;
        $data['websiteemail'] = $request->websiteemail;
        $data['websitecontact'] = $request->websitecontact;
        $data['websitetiming'] = $request->websitetiming;
        $data['websitelocation'] = $request->websitelocation;
        $data['websitelocationiframe'] = $request->websitelocationiframe;
        $data['websitefacebook'] = $request->websitefacebook;
        $data['websitetwitter'] = $request->websitetwitter;
        $data['websiteinstagram'] = $request->websiteinstagram;
        $data['websiteyoutube'] = $request->websiteyoutube;

        $globe_location = $request->globe_location;

        $website_globe_locations = Website::select('globe_locations')->first();

        $website_globe_locations = json_decode($website_globe_locations->globe_locations);

        foreach($website_globe_locations as $website_globe_location){

            if(in_array($website_globe_location->name,$globe_location)){
                $website_globe_location->status = 1;
            }else{
                $website_globe_location->status = 0;
            }
        }

        // print_r();

        $data['globe_locations'] = json_encode($website_globe_locations);
        // dd($data['globe_locations']);


        $update = Website::where(['id'=>1])->update($data);

        if($update){
            $website = Website::first();
            return view('website',['website'=>$website]);
        }else{
            return view('website',['errors'=>$validation->errors(),'request'=>$request]);
        }
    }
}
