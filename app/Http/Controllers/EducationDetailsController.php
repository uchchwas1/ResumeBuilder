<?php

namespace App\Http\Controllers;

use App\Models\EducationDetails;
use Illuminate\Http\Request;

class EducationDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $education = auth()->user()->education;
        
        return view('education.index', compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('education.details');
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
            'school_name' => 'required',
            'degree' => 'required',
            'field_of_study' => 'required',
            'graduation_start_date' => 'required',
            'graduation_end_date' => 'required',
        ]);
        $detail = new EducationDetails();
        
        // $detail->fullname = $request->input('fullname');
        // $detail->phone = $request->input('phone');
        // $detail->email = $request->input('email');
        // $detail->address = $request->input('address');
        // $detail->user_id = auth()->id();
        // $detail->save();

        // //return back();
        // return redirect()->route('education.details');
        auth()->user()->education()->create($request->all());
        return redirect()->route('education.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EducationDetails  $educationDetails
     * @return \Illuminate\Http\Response
     */
    public function show(EducationDetails $educationDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EducationDetails  $educationDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(EducationDetails $educationDetails)
    {
        return view('education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EducationDetails  $educationDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EducationDetails $educationDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EducationDetails  $educationDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(EducationDetails $educationDetails)
    {
        //
    }
}
