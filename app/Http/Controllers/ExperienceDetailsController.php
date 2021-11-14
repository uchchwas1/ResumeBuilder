<?php

namespace App\Http\Controllers;

use App\Models\ExperienceDetails;
use Illuminate\Http\Request;

class ExperienceDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = auth()->user()->experiences;
        
        return view('experience.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('experience.details');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formData = $request->validate([
            'job_title' => 'required',
            'employer' => 'required',
            'city' => 'required',
            'state' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        

        auth()->user()->experiences()->create($formData);

        return redirect()->route('experience.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExperienceDetails  $experienceDetails
     * @return \Illuminate\Http\Response
     */
    public function show(ExperienceDetails $experienceDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExperienceDetails  $experienceDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(ExperienceDetails $experience)
    {
        return view('experience.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExperienceDetails  $experienceDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExperienceDetails $experience)
    {
        $request->validate([
            'job_title' => 'required',
            'employer' => 'required',
            'city' => 'required',
            'state' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $experience->update($request->all());

        return redirect()->route('experience.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExperienceDetails  $experienceDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExperienceDetails $experience)
    {
        $experience->delete();

        return back();
    }
}
