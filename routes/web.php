<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

// // index
// Route::get('/jobs',[JobController::class, 'index']);
// // create
// Route::get('/jobs/create', [JobController::class, 'create']);
// // show
// Route::get('/jobs/{job}',[JobController::class, 'show']);
// // store
// Route::post('/jobs', [JobController::class, 'store']);
// // edit
// Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);
// // update
// Route::patch('/jobs/{job}', [JobController::class, 'update']);
// // delete
// Route::delete('/jobs/{job}', [JobController::class, 'destroy']);


// // group route
// Route::controller(JobController::class)->group(function (){
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create',  'create');
//     Route::get('/jobs/{job}', 'show');
//     Route::post('/jobs',  'store');
//     Route::get('/jobs/{job}/edit',  'edit');
//     Route::patch('/jobs/{job}',  'update');
//     Route::delete('/jobs/{job}',  'destroy');
// });

// resource route
Route::resource('jobs', JobController::class);

Route::get('/contact', function () {
    return view('contact');
});
