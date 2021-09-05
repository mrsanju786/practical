<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validatedData = $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required','email'],
            'designation' => ['required'],
            'dob' => ['required'],
            'address1' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'zipcode' => ['required'],
        ]);

        Job::create([
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'email' => $request->email,
        'designation' => $request->designation,
        'dob' => $request->dob,
        'address1' => $request->address1,
        'address2' => $request->address2,
        'city' => $request->city,
        'state' => $request->state,
        'zipcode' => $request->zipcode,
        'sscboard' => $request->sscboard,
        'sscpassingyear' => $request->sscpassingyear,
        'sscpercentage' => $request->sscpercentage,
        'hscboard' => $request->hscboard,
        'hscpassingyear' => $request->hscpassingyear,
        'hscpercentage' => $request->hscpercentage,
        'bachelorboard' => $request->bachelorboard,
        'bachelorpassingyear' => $request->bachelorpassingyear,
        'bacheloruniversity' => $request->bacheloruniversity,
        'bachelorpercentage' => $request->bachelorpercentage,
        'masterboard' => $request->masterboard,
        'masterpassingyear' => $request->masterpassingyear,
        'masteruniversity' => $request->masteruniversity,
        'masterpercentage' => $request->masterpercentage,
        'companyname1' => $request->companyname1,
        'designation1' => $request->designation1,
        'fromdate1' => $request->fromdate1,
        'todate1' => $request->todate1,
        'companyname2' => $request->companyname2,
        'designation2' => $request->designation2,
        'fromdate2' => $request->fromdate2,
        'todate2' => $request->todate2,
        'companyname3' => $request->companyname3,
        'designation3' => $request->designation3,
        'fromdate3' => $request->fromdate3,
        'todate3' => $request->todate3,
        'languages' => json_encode($request->languages) ?? null,
        'technologies' => json_encode($request->technologies) ?? null,
        'refname1' => $request->refname1,
        'refcontact1' => $request->refcontact1,
        'refrelation1' => $request->refrelation1,
        'refname2' => $request->refname2,
        'refcontact2' => $request->refcontact2,
        'refrelation2' => $request->refrelation2,
        'prelocation' => $request->prelocation,
        'prenoticeperiod' => $request->prenoticeperiod,
        'preectc' => $request->preectc,
        'precctc' => $request->precctc,
        'predepartment' => $request->predepartment,
        ]);

        return back()->with('Successfully Job Apply');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job,$id)
    {
        $job = Job::where('id',$id)->first();
        $languages = json_decode($job->languages);
        $technologies = json_decode($job->technologies);

        // dd($languages);
        // dd($technologies);
      
        return view('editjob',compact('job','languages','technologies'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required','email'],
            'designation' => ['required'],
            'dob' => ['required'],
            'address1' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'zipcode' => ['required'],
        ]);
        
        $updateJob = ([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'designation' => $request->designation,
            'dob' => $request->dob,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'city' => $request->city,
            'state' => $request->state,
            'zipcode' => $request->zipcode,
            'sscboard' => $request->sscboard,
            'sscpassingyear' => $request->sscpassingyear,
            'sscpercentage' => $request->sscpercentage,
            'hscboard' => $request->hscboard,
            'hscpassingyear' => $request->hscpassingyear,
            'hscpercentage' => $request->hscpercentage,
            'bachelorboard' => $request->bachelorboard,
            'bachelorpassingyear' => $request->bachelorpassingyear,
            'bacheloruniversity' => $request->bacheloruniversity,
            'bachelorpercentage' => $request->bachelorpercentage,
            'masterboard' => $request->masterboard,
            'masterpassingyear' => $request->masterpassingyear,
            'masteruniversity' => $request->masteruniversity,
            'masterpercentage' => $request->masterpercentage,
            'companyname1' => $request->companyname1,
            'designation1' => $request->designation1,
            'fromdate1' => $request->fromdate1,
            'todate1' => $request->todate1,
            'companyname2' => $request->companyname2,
            'designation2' => $request->designation2,
            'fromdate2' => $request->fromdate2,
            'todate2' => $request->todate2,
            'companyname3' => $request->companyname3,
            'designation3' => $request->designation3,
            'fromdate3' => $request->fromdate3,
            'todate3' => $request->todate3,
            'languages' => json_encode($request->languages) ?? null,
            'technologies' => json_encode($request->technologies) ?? null,
            'refname1' => $request->refname1,
            'refcontact1' => $request->refcontact1,
            'refrelation1' => $request->refrelation1,
            'refname2' => $request->refname2,
            'refcontact2' => $request->refcontact2,
            'refrelation2' => $request->refrelation2,
            'prelocation' => $request->prelocation,
            'prenoticeperiod' => $request->prenoticeperiod,
            'preectc' => $request->preectc,
            'precctc' => $request->precctc,
            'predepartment' => $request->predepartment,
            ]);

            Job::where('id',$id)->update($updateJob);
            return redirect('home')->with('Successfully Job Updated')->with([
                'success' => true,
                'message' => 'Jobs Updated successfully',
                'class' => 'success'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Job::where('id',$id)->delete();
        return back()->with([
            'success' => true,
            'message' => 'Jobs Deleted successfully',
            'class' => 'success'
        ]);
    }
}
