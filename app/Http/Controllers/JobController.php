<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    //


    public function index()
    {
        $jobs = Job::with('employer')->simplePaginate(3);

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

        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'company' => request('company'),
            'location' => request('location'),
            'description' => request('description'),
            'employer_id' => 1
        ]);

        return redirect()->route('jobs.index');
    }
    public function edit(Job $job)
    {

        // Gate::authorize('edit-job', $job);
        if(Gate::denies('edit-job', $job)){
            abort(403);
        }

        return view('jobs.edit', ['job' => $job]);
    }
    public function update(Job $job)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        // TODO: authorize 

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
        // TODO: authorize

        // Job::findOrFail($id)->delete();
        $job->delete();

        return redirect()->route('jobs.index');
    }
}
