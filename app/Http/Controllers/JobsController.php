<?php

namespace App\Http\Controllers;

use App\Jobs;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages/createJob');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('filenames')){
            foreach($data = $request->file('filenames') as $file){
                $name = time().'.'.$file->extension();
                $file->move(public_path().'/jobImages/', $name);  
                $data[] = $name;
                // This should be corrected, because for uploaded two images in database create two enteries 
                // And without upload images return error
            }
        }


        $jobs = new Jobs;
        $jobs->title = $request->input('title');
        $jobs->phoneNumber = $request->input('phoneNumber');
        $jobs->email = $request->input('email');
        $jobs->price = $request->input('price');
        $jobs->city = $request->input('city');
        $jobs->adress = $request->input('adress');
        $jobs->summary = $request->input('summary');
        $jobs->filenames=json_encode($data);
        $jobs->save();
        return view('pages/createJob');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function show(Jobs $jobs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobs $jobs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobs $jobs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobs $jobs)
    {
        //
    }
}
