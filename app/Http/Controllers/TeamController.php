<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Team;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.pages.team.team', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'job_name' => 'required'
        ]);
        $img_name = 'img_'.time().'.'.$request->picture->getClientOriginalExtension();
        $request->picture->move(public_path('frontend_assets/img/'),$img_name);
        Team::create([
            'first_name'=> $request->first_name,
            'last_name' => $request->last_name,
            'picture' => $img_name,
            'job_name' => $request->job_name,
            'twitter_url' => $request->twitter_url,
            'facebook_url' => $request->facebook_url,
            'instagram_url' => $request->instagram_url,
            'linkedin_url'=> $request->linkedin_url
        ]);

        return redirect()->route('team.index')
            ->with('message', 'team member added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('team.show', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'job_name' => 'required'
        ]);
        
        if ($request->picture){
            $img_name = 'img_'.time().'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path('frontend_assets/img/'),$img_name);
            File::delete(public_path('frontend_assets/img/'.$request->old_picture));
        }
        else{
            $img_name = $request->old_picture;
        }
        $team = Team::findorfail($request->id);
        $team->update([
            'first_name'=> $request->first_name,
            'last_name' => $request->last_name,
            'picture' => $img_name,
            'job_name' => $request->job_name,
            'twitter_url' => $request->twitter_url,
            'facebook_url' => $request->facebook_url,
            'instagram_url' => $request->instagram_url,
            'linkedin_url'=> $request->linkedin_url
        ]);
        return redirect()->route('team.index')
            ->with('message', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $team = Team::findorfail($id);
        $team->delete();
        return redirect()->route('team.index')
            ->with('message', 'team member deleted successfully');
    }

    public function getAllTeamMembers(){
        $teams = Team::all();
        return view('frontend/pages/ourteam', compact('teams'));
    }
}
