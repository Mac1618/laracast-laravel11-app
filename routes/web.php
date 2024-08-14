<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Static Routes
Route::get('/', function () {
    return view('welcome', [
        'greeting' => 'Hello Amigo', // can be access in '/' by $greeting
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [ // array of jobs to map
            [
                'id' => 1,
                'title' => 'Programmer',
                'salary' => '$20,000',
            ],
            [
                'id' => 2,
                'title' => 'Teacher',
                'salary' => '$40,000'
            ],
            [
                'id' => 3,
                'title' => 'Cyber Security',
                'salary' => '$80,000'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [ // array of jobs to map
        [
            'id' => 1,
            'title' => 'Programmer',
            'salary' => '$20,000',
        ],
        [
            'id' => 2,
            'title' => 'Teacher',
            'salary' => '$40,000'
        ],
        [
            'id' => 3,
            'title' => 'Cyber Security',
            'salary' => '$80,000'
        ]
    ];

    // Arr::first() = find the first id form jobs that matches the params
    // use ($id) = params id
    $job = Arr::first($jobs, function ($jobs) use ($id)  {
        return $jobs['id'] = $id;
    });

    // using Arrow function no need to use 'use ($id)'
    // e.g. = Arr::first($jobs, fn($jobs) => $jobs['id'] = $id);

    // dump and die = check if $job works.
    // dd($job);

    return view('job', ['job' => $job]);
});

// Assignment for day 2
Route::get('/contact', function () {
    return view('contact');
});

// Server API 
Route::get('/api/sample', function () {
    return ['foo' => 'bar'];
});