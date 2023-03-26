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
  $latest_posts = [
    [
      "image" => "images/post_images/1.jpg",
      "title" => "16 Examples of Self-Description in a resume That Can Get Recruiters' Attention",
      "posted_at" => "12/7/2020",
      "excerpt" => "our resume is your first impression to potential employers, so it's important to make it count. In this post, we'll outline 10 common mistakes people make when writing their resumes and how to avoid them."
    ],
    [
      "image" => "images/post_images/2.jpg",
      "title" => "16 Examples of Self-Description in a resume That Can Get Recruiters' Attention",
      "posted_at" => "12/7/2020",
      "excerpt" => "our resume is your first impression to potential employers, so it's important to make it count. In this post, we'll outline 10 common mistakes people make when writing their resumes and how to avoid them."
    ],
    [
      "image" => "images/post_images/3.jpg",
      "title" => "16 Examples of Self-Description in a resume That Can Get Recruiters' Attention",
      "posted_at" => "12/7/2020",
      "excerpt" => "our resume is your first impression to potential employers, so it's important to make it count. In this post, we'll outline 10 common mistakes people make when writing their resumes and how to avoid them."
    ],
    [
      "image" => "images/post_images/4.jpg",
      "title" => "16 Examples of Self-Description in a resume That Can Get Recruiters' Attention",
      "posted_at" => "12/7/2020",
      "excerpt" => "our resume is your first impression to potential employers, so it's important to make it count. In this post, we'll outline 10 common mistakes people make when writing their resumes and how to avoid them."
    ],
    [
      "image" => "images/post_images/5.jpg",
      "title" => "16 Examples of Self-Description in a resume That Can Get Recruiters' Attention",
      "posted_at" => "12/7/2020",
      "excerpt" => "our resume is your first impression to potential employers, so it's important to make it count. In this post, we'll outline 10 common mistakes people make when writing their resumes and how to avoid them."
    ],
    [
      "image" => "images/post_images/6.jpg",
      "title" => "16 Examples of Self-Description in a resume That Can Get Recruiters' Attention",
      "posted_at" => "12/7/2020",
      "excerpt" => "our resume is your first impression to potential employers, so it's important to make it count. In this post, we'll outline 10 common mistakes people make when writing their resumes and how to avoid them."
    ],

  ];
  return view('home', [
    "text" => "We also offer a range of resources to help you succed in your job search and with our personalized job alerts, you can receive notifications when new job opportunities that match your preferences become available.",
    "features" => $features,
    "latest_jobs" => $latest_jobs,
    "latest_posts" => $latest_posts,
  ]);
});