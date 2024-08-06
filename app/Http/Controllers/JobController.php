<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);
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
        return view('jobs.show', ['job' => $job]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
            'employer_id' => ['required', 'exists:employers,id'],
        ]);

        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => ['required', 'exists:employers,id'],
        ]);
        return redirect('/jobs');
    }
    public function edit(Job $job)
    {
       
       
        // Gate::authorize('edit-job', $job);

        return view('jobs.edit', ['job' => $job]);
    }
    public function update(Job $job, Request $request)
    {
        Gate::authorize('edit-job', $job);

        $request->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);


        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);
        return redirect('/jobs/' . $job->id);
    }
    public function destory(Job $job)
    {
        Gate::authorize('edit-job', $job);
     
        $job->delete();
        return redirect('/jobs');
    }
}
