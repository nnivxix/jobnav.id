<?php

namespace App\Http\Controllers;

use App\Models\Company;
use DateTime;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $jobs = Job::query()
            ->where('title', 'LIKE', "%{$keyword}%")
            ->orWhere('description', 'LIKE', "%{$keyword}%")
            ->get();
        return view('jobs.index', compact('jobs', 'keyword'));
    }

    public function create()
    {
        return view('jobs.add', [
            'companies' => Company::all()->where('ownedby', auth()->user()->id),
        ]);
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Job $job)
    {
        $company_jobs = Job::all()->where('company_id', $job->company->id)
            ->where('uuid', '!=', $job->uuid);
        return view('jobs.show', [
            'job' => $job,
            'company_jobs' => $company_jobs,
        ]);
    }

    public function edit(Job $job)
    {
        if ($job->company->ownedby !== auth()->user()->id) {
            return redirect('/jobs');
        }
        return view('jobs.edit', [
            'job' => $job,
        ]);
    }

    public function update(Request $request, Job $job)
    {
        $validate = $request->validate([
            'title' => 'string|required',
            'position' => 'string|required',
            'location' => 'string|required',
            'salary' => 'string|required',
            'categories' => 'string|required',
            'posted_at' => 'date|required',
            'description' => 'string|required',
        ]);

        $validate['company_id'] = $job->company_id;
        $validate['uuid'] = $job->uuid;


        $job->update($validate);
        return redirect('/jobs/' . $job->uuid)->with('success', 'Job has been updated!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
