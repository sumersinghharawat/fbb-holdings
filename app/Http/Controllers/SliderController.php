<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sliders = Slider::get();
        return view('view-slider',['sliders'=> $sliders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createslider()
    {
        //
        return view('add-slider');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeslider(Request $request)
    {
        //
        $validation = Validator::make($request->all(), [
            'image' => 'image|mimes:png,jpg,jpeg',
            'title' => 'required',
            'subtitle' => 'required',
        ]);

        if($validation->fails()){
            return view('add-slider',['errors'=>$validation->errors(),'request'=>$request]);
        }

        $data = [];
        if($request->hasFile('image')){
            $imageName1 = (time()+1).'.'.$request->image->extension();
            $request->image->move(public_path('images/slider/'), $imageName1);
            $data['image'] = asset('images/slider/'.$imageName1);
        }

        $data['title'] = $request->title;
        $data['subtitle'] = $request->subtitle;

        $inserted = Slider::create($data);

        if($inserted){
            $sliders = Slider::get();
            return view('view-slider',['sliders'=>$sliders]);
        }else{
            return view('add-slider',['errors'=>$validation->errors(),'request'=>$request]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editslider(Slider $slider, $slider_id)
    {
        //
        $slider_single = Slider::where(['id'=>$slider_id])->first();
        return view('add-slider',['slider_single'=>$slider_single]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateslider(Request $request, Slider $slider,$slider_id)
    {
        //
        //
        $validation = Validator::make($request->all(), [
            'title' => 'required',
            'subtitle' => 'required',
        ]);

        if($validation->fails()){
            return view('add-slider',['errors'=>$validation->errors(),'request'=>$request]);
        }

        $data = [];
        if($request->hasFile('image')){
            $imageName1 = (time()+1).'.'.$request->image->extension();
            $request->image->move(public_path('images/slider/'), $imageName1);
            $data['image'] = asset('images/slider/'.$imageName1);
        }

        $data['title'] = $request->title;
        $data['subtitle'] = $request->subtitle;

        if($data){
            $update = Slider::where(['id'=>$slider_id])->update($data);
        }
        if($update){
            $sliders = Slider::get();
            return view('view-slider',['sliders'=>$sliders]);
        }else{
            return view('add-slider',['errors'=>$validation->errors(),'request'=>$request]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyslider(Slider $slider, $slider_id)
    {
        //

        $count = count(Slider::where(['id'=>$slider_id])->get());

        if($count != 0){
            Slider::where(['id'=>$slider_id])->delete();

            return redirect()->to('/view-slider')->send();
        }else{
            return redirect()->to('/view-slider')->send();
        }

    }
}
