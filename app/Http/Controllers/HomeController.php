<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Job_vacancy;
use App\Models\JobCategory;
use App\Models\Location;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $locations = Location::all();
        $categories = JobCategory::all();
        $companies = Company::all();
        $jobs = Job_vacancy::with('location')
            ->where('is_verified', true)
            ->where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();
        // dd($jobs
        return view('welcome', compact('locations', 'categories', 'jobs', 'companies'));
    }

    public function getLocation(Location $location, $name = null)
    {
        $locations = Location::all();
        $categories = JobCategory::all();
        $jobs = Job_vacancy::with('location')
            ->where('is_verified', true)
            ->where('is_active', true)
            ->where('location_id', $location->id)
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();

        // return $jobs;
        return view('job-location', compact('jobs', 'name', 'locations', 'categories'));
    }

    public function category()
    {
        $categories = JobCategory::withCount('jobVacancies')
            ->orderBy('job_vacancies_count', 'desc')
            ->get();
        // return $categories;
        // return response()->json($categories);
        return view('all-category', compact('categories'));
    }
    public function search(Request $request, $location = null, $category = null, $job = null)
    {
        $locations = Location::all();
        $categories = JobCategory::all();
        $jobs = Job_vacancy::with('location')
            ->where('is_verified', true)
            ->where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();

        return view('welcome', compact('locations', 'categories', 'jobs'));
    }
    public function searchByLocation($location)
    {
        $locations = Location::all();
        $categories = JobCategory::all();
        $jobs = Job_vacancy::with('location')
            ->where('is_verified', true)
            ->where('is_active', true)
            ->where('location_id', $location)
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();

        return view('welcome', compact('locations', 'categories', 'jobs'));
    }

    public function company()
    {
        $companies = Company::all();
        return view('all-company', compact('companies'));
    }

    public function loker()
    {
        $jobs = Job_vacancy::with('location')
            ->where('is_verified', true)
            ->where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('all-loker', compact('jobs'));
    }


    public function searchApply(Request $request)
    {


        return view('welcome', compact('locations', 'categories', 'jobs'));
    }
}
