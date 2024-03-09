<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\User;
use App\Models\Website;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $businesses = Business::get();
        return view('view-business',['businesses'=> $businesses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createbusiness()
    {
        //
        return view('add-business');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storebusiness(Request $request)
    {
        //
        // dd($request->all());

        $validation = Validator::make($request->all(), [
            'logo' => 'image|mimes:png,jpg,jpeg|required',
            'cover' => 'image|mimes:png,jpg,jpeg|required',
            // 'headimage' => 'image|mimes:png,jpg,jpeg|required',
            'title' => 'required',
            // 'brand' => 'required',
            'location' => 'required',
            // 'phonenumber' => 'required',
            // 'email' => 'required',
            // 'website' => 'required',
            // 'description' => 'required',
            // 'location_iframe' => 'required'
        ]);

        if($validation->fails()){
            return view('add-business',['errors'=>$validation->errors(),'request'=>$request]);
        }

        $data = [];
        if($request->hasFile('logo')){
            $imageName1 = (time()+1).'-logo.'.$request->logo->extension();
            $request->logo->move(public_path('images/business/'), $imageName1);
            $data['logo'] = asset('images/business/'.$imageName1);
        }

        if($request->hasFile('cover')){
            $imageName2 = (time()+1).'-cover.'.$request->cover->extension();
            $request->cover->move(public_path('images/business/'), $imageName2);
            $data['cover'] = asset('images/business/'.$imageName2);
        }

        if($request->hasFile('headimage')){
            $imageName2 = (time()+1).'-headimage.'.$request->headimage->extension();
            $request->headimage->move(public_path('images/business/'), $imageName2);
            $data['headimage'] = asset('images/business/'.$imageName2);
        }

        $finalarray = [];
        if(!empty($request->galleryimage)){
            if(count($request->galleryimage) != 0){
                foreach($request->galleryimage as $galleryimagekey => $galleryimage){
                    $imageName2 = (time()+1).'-gallery'.$galleryimagekey.".".$galleryimage->extension();
                    $galleryimage->move(public_path('images/business/'), $imageName2);
                    $finalarray[] = asset('images/business/'.$imageName2);
                }
            }
        }

        $data['gallery'] = json_encode(count($finalarray)!=0?$finalarray:[]);

        $data['title'] = $request->title;
        $data['brand'] = $request->brand;
        $data['location'] = $request->location;
        $data['phonenumber'] = $request->phonenumber;
        $data['email'] = $request->email;
        $data['description'] = $request->description;
        $data['website'] = $request->website;
        $data['location_iframe'] = $request->location_iframe;

        $data['slug'] = Str::slug($request->title);

        // dd($data);

        $inserted = Business::create($data);

        if($inserted){
            $businesses = Business::get();
            return view('view-business',['businesses'=>$businesses]);
        }else{
            return view('add-business',['errors'=>$validation->errors(),'request'=>$request]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Business $business)
    {
        //


    }
    public function business_portfolio(Business $business,$business_id){
        if(session()->get('locale')){
            $locale = session()->get('locale');
            app()->setLocale($locale);
        }

        if (isset($locale) && in_array($locale, config('app.available_locales') ?? [])) {
            app()->setLocale($locale);
        }

        $userdata = User::first();
        $business = Business::where(['slug'=>$business_id])->first();
        $website = Website::first();
        return view('websites.business-portfolio',['user'=>$userdata,'business'=>$business, 'website'=>$website]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editbusiness(Business $business, $business_id)
    {
        //
        $business_single = Business::where(['id'=>$business_id])->first();
        return view('add-business',['business_single'=>$business_single]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatebusiness(Request $request, Business $business, $business_id)
    {
        //
        // dd($request->all());

        $validation = Validator::make($request->all(), [
            'title' => 'required',
            // 'brand' => 'required',
            // 'location' => 'required',
            // 'phonenumber' => 'required',
            // 'email' => 'required',
            // 'website' => 'required',
            // 'description' => 'required',
            // 'location_iframe' => 'required'
        ]);

        if($validation->fails()){
            return view('add-business',['errors'=>$validation->errors(),'request'=>$request]);
        }

        $data = [];
        if($request->hasFile('logo')){
            $imageName1 = (time()+1).'-logo.'.$request->logo->extension();
            $request->logo->move(public_path('images/business/'), $imageName1);
            $data['logo'] = asset('images/business/'.$imageName1);
        }

        if($request->hasFile('cover')){
            $imageName2 = (time()+1).'-cover.'.$request->cover->extension();
            $request->cover->move(public_path('images/business/'), $imageName2);
            $data['cover'] = asset('images/business/'.$imageName2);
        }


        if($request->headimagevalid){
            if($request->hasFile('headimage')){
                $imageName2 = (time()+1).'-headimage.'.$request->headimage->extension();
                $request->headimage->move(public_path('images/business/'), $imageName2);
                $data['headimage'] = asset('images/business/'.$imageName2);
            }
        }else{
            $data['headimage'] = "";
        }

        // dd($request->all());

        $businessarray = Business::where(['id'=>$business_id])->first();
        $newarray = $request->all('image-gallery-array')['image-gallery-array'];
        $newString = array_values((array) json_decode($businessarray->gallery));
        $newarray = explode(",",$newarray);
        $finalarray = array_intersect($newarray, $newString);

        foreach($finalarray as $finalarrayelementkey => $finalarrayelement){
            $finalarray[$finalarrayelementkey] = $finalarrayelement;
        }

        if(!empty($request->galleryimage)){
            foreach($request->galleryimage as $galleryimagekey => $galleryimage){
                $imageName2 = (time()+1).'-gallery'.$galleryimagekey.".".$galleryimage->extension();
                $galleryimage->move(public_path('images/business/'), $imageName2);
                $finalarray[] = asset('images/business/'.$imageName2);
            }

        }

        // dd($finalarray);
        $data['gallery'] = $finalarray;

        $data['title'] = $request->title;

        if(empty($request->slug)){
            $data['slug'] = Str::slug($request->title);
        }else{
            $data['slug'] = $request->slug;
        }

        $data['brand'] = $request->brand;
        $data['location'] = $request->location;
        $data['phonenumber'] = $request->phonenumber;
        $data['email'] = $request->email;
        $data['description'] = $request->description;
        $data['website'] = $request->website;
        $data['location_iframe'] = $request->location_iframe;

        $update = Business::where(['id'=>$business_id])->update($data);

        if($update){
            $businesses = Business::get();
            return view('view-business',['businesses'=>$businesses]);
        }else{
            return view('add-business',['errors'=>$validation->errors(),'request'=>$request,'business_id'=>$business_id]);
        }
    }

    public function statusbusiness(Business $business, $business_id){
        $business = Business::where(['id'=>$business_id])->first();
        $status = $business->status==1?0:1;
        $update = Business::where(['id'=>$business_id])->update(['status'=>$status]);

        $businesses = Business::get();

        if($update){
            return view('view-business',['businesses'=>$businesses]);
        }else{
            return view('view-business',['errors'=>"Something is wrong!!!",'businesses'=>$businesses]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroybusiness(Business $business, $business_id)
    {
        //
        $count = count(Business::where(['id'=>$business_id])->get());

        if($count != 0){
            Business::where(['id'=>$business_id])->delete();

            return redirect()->to('/view-business')->send();
        }else{
            return redirect()->to('/view-business')->send();
        }
    }
}
