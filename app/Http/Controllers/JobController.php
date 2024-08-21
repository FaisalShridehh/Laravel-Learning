<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    //


    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(10);

        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }
    public function create()
    {
        return view('jobs.create');
    }
    public function show(Job $job)
    {
        // $job = Job::find($id);
        // dd($job);

        return view('jobs.show', ['job' => $job]);
    }
    
    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
            'company' => ['required'],
            'location' => ['required'],
            'description' => ['required'],
        ]);

        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'company' => request('company'),
            'location' => request('location'),
            'description' => request('description'),
            'employer_id' => 1
        ]);

        Mail::to($job->employer->user)->queue (new JobPosted($job));

        return redirect()->route('jobs.index');
    }
    public function edit(Job $job)
    {

        // Gate::authorize('edit-job', $job);
        // if(Gate::denies('update', $job)){
        //     abort(403);
        // }

        return view('jobs.edit', ['job' => $job]);
    }
    public function update(Job $job)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);


        // $job = Job::findOrFail($id);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
            'company' => request('company'),
            'location' => request('location'),
            'description' => request('description'),
        ]);

        return redirect()->route('jobs.show', $job->id);
    }
    public function destroy(Job $job)
    {

        // Job::findOrFail($id)->delete();
        $job->delete();

        return redirect()->route('jobs.index');
    }
}
