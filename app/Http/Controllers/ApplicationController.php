<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Job_vacancy;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    // Mengirim aplikasi pekerjaan
    public function store(Request $request, $jobVacancyId)
    {
        $request->validate([
            'cover_letter' => 'nullable|string',
            'cv_link' => 'required|string|url',
        ]);

        $jobVacancy = Job_vacancy::findOrFail($jobVacancyId);

        $application = Application::create([
            'job_vacancy_id' => $jobVacancy->id,
            'job_seeker_id' => auth()->id(),
            'cover_letter' => $request->cover_letter,
            'cv_link' => $request->cv_link,
            'status' => 'pending',
        ]);

        return response()->json($application, 201);
    }

    // Menampilkan aplikasi pekerjaan yang dikirim oleh job seeker
    public function show($id)
    {
        $application = Application::findOrFail($id);
        return response()->json($application);
    }
}
