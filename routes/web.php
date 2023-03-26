<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  $features = [
    [
      "icon" => "images/cv.svg",
      "title" => "Resume Builder"
    ],
    [
      "icon" => "images/conversation.svg",
      "title" => "Interview Tips"
    ],
    [
      "icon" => "images/statistic.svg",
      "title" => "Career Advice"
    ],
  ];
  $latest_jobs = [
    [
      "icon" => "images/company_example.svg",
      "company" => "Laracast",
      "position" => "Junior Designer",
      "title" => "UI Designer",
      "description" => "We are seeking developers who have a passion for software development with a motivated and energetic attitude. You will be contributing in a team environment to the design and implementation of both backend and frontend portions of the project. Collaborate with our team using agile practices to plan and execute required features.",
      "location" => "Jakarta",
      "job_type" => "remote"
    ],
    [
      "icon" => "images/company_example.svg",
      "company" => "Laracast",
      "position" => "Junior Designer",
      "title" => "UI Designer",
      "description" => "We are seeking developers who have a passion for software development with a motivated and energetic attitude. You will be contributing in a team environment to the design and implementation of both backend and frontend portions of the project. Collaborate with our team using agile practices to plan and execute required features.",
      "location" => "Jakarta",
      "job_type" => "remote"
    ],
    [
      "icon" => "images/company_example.svg",
      "company" => "Laracast",
      "position" => "Junior Designer",
      "title" => "UI Designer",
      "description" => "We are seeking developers who have a passion for software development with a motivated and energetic attitude. You will be contributing in a team environment to the design and implementation of both backend and frontend portions of the project. Collaborate with our team using agile practices to plan and execute required features.",
      "location" => "Jakarta",
      "job_type" => "remote"
    ],
    [
      "icon" => "images/company_example.svg",
      "company" => "Laracast",
      "position" => "Junior Designer",
      "title" => "UI Designer",
      "description" => "We are seeking developers who have a passion for software development with a motivated and energetic attitude. You will be contributing in a team environment to the design and implementation of both backend and frontend portions of the project. Collaborate with our team using agile practices to plan and execute required features.",
      "location" => "Jakarta",
      "job_type" => "remote"
    ],
    [
      "icon" => "images/company_example.svg",
      "company" => "Laracast",
      "position" => "Junior Designer",
      "title" => "UI Designer",
      "description" => "We are seeking developers who have a passion for software development with a motivated and energetic attitude. You will be contributing in a team environment to the design and implementation of both backend and frontend portions of the project. Collaborate with our team using agile practices to plan and execute required features.",
      "location" => "Jakarta",
      "job_type" => "remote"
    ],
    [
      "icon" => "images/company_example.svg",
      "company" => "Laracast",
      "position" => "Junior Designer",
      "title" => "UI Designer",
      "description" => "We are seeking developers who have a passion for software development with a motivated and energetic attitude. You will be contributing in a team environment to the design and implementation of both backend and frontend portions of the project. Collaborate with our team using agile practices to plan and execute required features.",
      "location" => "Jakarta",
      "job_type" => "remote"
    ],
  ];
  return view('home', [
    "text" => "We also offer a range of resources to help you succed in your job search and with our personalized job alerts, you can receive notifications when new job opportunities that match your preferences become available.",
    "features" => $features,
    "latest_jobs" => $latest_jobs
  ]);
});
