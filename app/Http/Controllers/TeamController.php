<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $teams = Team::get();
        return view('view-team',['teams'=> $teams]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createteam()
    {
        //
        return view('add-team');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeteam(Request $request)
    {
        //
        $validation = Validator::make($request->all(), [
            'image' => 'image|mimes:png,jpg,jpeg',
            'name' => 'required',
            'position' => 'required',
        ]);

        if($validation->fails()){
            return view('add-team',['errors'=>$validation->errors(),'request'=>$request]);
        }

        $data = [];
        if($request->hasFile('image')){
            $imageName1 = (time()+1).'.'.$request->image->extension();
            $request->image->move(public_path('images/team/'), $imageName1);
            $data['image'] = asset('images/team/'.$imageName1);
        }

        $data['name'] = $request->name;
        $data['position'] = $request->position;

        $inserted = Team::create($data);

        if($inserted){
            $teams = Team::get();
            return view('view-team',['teams'=>$teams]);
        }else{
            return view('add-team',['errors'=>$validation->errors(),'request'=>$request]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editteam(Team $team, $team_id ="")
    {
        //
        $team_single = Team::where(['id'=>$team_id])->first();
        return view('add-team',['team_single'=>$team_single]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateteam(Request $request, $team_id)
    {
        //
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'position' => 'required',
        ]);

        if($validation->fails()){
            return view('add-team',['errors'=>$validation->errors(),'request'=>$request]);
        }

        $data = [];
        if($request->hasFile('image')){
            $imageName1 = (time()+1).'.'.$request->image->extension();
            $request->image->move(public_path('images/team/'), $imageName1);
            $data['image'] = asset('images/team/'.$imageName1);
        }

        $data['name'] = $request->name;
        $data['position'] = $request->position;

        if($data){
            $update = Team::where(['id'=>$team_id])->update($data);
        }
        if($update){
            $teams = Team::get();
            return view('view-team',['teams'=>$teams]);
        }else{
            return view('add-team',['errors'=>$validation->errors(),'request'=>$request]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyteam(Team $team, $team_id)
    {
        //

        $count = count(Team::where(['id'=>$team_id])->get());

        if($count != 0){
            Team::where(['id'=>$team_id])->delete();

            return redirect()->to('/view-team')->send();
        }else{
            return redirect()->to('/view-team')->send();
        }
    }
}
