<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

// index
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->simplePaginate(4);
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

// create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// show
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);
});

// store
Route::post('/jobs', function () {
    // validation
    request()->validate([
        'title' =>['required', 'min:5'],
        'salary'=>['required']
    ]);

    Job::create([
        'title'=> request('title'),
        'salary' =>request('salary'),
        'employer_id'=>1
    ]);

    return redirect('/jobs');
});

// edit
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
    return view('jobs.edit', ['job' => $job]);
});

// update
Route::patch('/jobs/{id}', function ($id) {
    request()->validate([
        'title' =>['required', 'min:5'],
        'salary'=>['required']
    ]);
    // authorize
    $job =Job::find($id);

    $job->update([
        'title'=>request('title'),
        'salary'=>request('salary'),
    ]);

    return redirect('/jobs/'.$job->id);
});

// delete
Route::delete('/jobs/{id}', function ($id) {
     Job::findOrFail($id)->delete();
    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});
