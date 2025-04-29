<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Job_vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{

    public function index()
    {

        $jobVacancies = Job_vacancy::where('company_id', auth()->user()->company->id)->get();

        // Get applications for the job vacancies, including job vacancy details
        $applications = Application::with('jobVacancy')
            ->whereIn('job_vacancy_id', $jobVacancies->pluck('id')) // Fetch only applications for the company's job vacancies
            ->get();

        // return $applications;
        // Return the view with job vacancies and applications
        return view('application.index', compact( 'applications'));
    }

    // form aplye
    public function create(Job_vacancy $jobVacancy)
    {
        // return $jobVacancy;
        return view('application.create', compact('jobVacancy'));
    }
    // Mengirim aplikasi pekerjaan

    public function store(Request $request, Job_vacancy $jobVacancy)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'cover_letter' => 'nullable|file|mimes:pdf,docx|max:5120', // Validate file (PDF, DOCX)
            'cv_link' => 'required|url',
        ]);

        // Handle file upload for the cover letter
        if ($request->hasFile('cover_letter')) {
            $validatedData['cover_letter'] = $request->file('cover_letter')->store('applications', 'public');
        }

        // Add additional data to the validated data
        $validatedData['job_vacancy_id'] = $jobVacancy->id;
        $validatedData['user_id'] = Auth::id();

        // Create the application
        Application::create($validatedData);

        // Redirect with success message
        return redirect()->route('job.show', $jobVacancy)
            ->with('success', 'Application submitted successfully.');
    }

    // Menampilkan aplikasi pekerjaan yang dikirim oleh job seeker
    public function show($id)
    {
        $application = Application::findOrFail($id);
        return response()->json($application);
    }
}
