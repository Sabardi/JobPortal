<?php

namespace App\Http\Controllers;

use App\Models\Job_vacancy;
use Illuminate\Http\Request;

class JobVacancyController extends Controller
{
      // Menampilkan semua lowongan pekerjaan
      public function index()
      {
          $jobVacancies = Job_vacancy::where('is_verified', true)->where('is_active', true)->get();
          return response()->json($jobVacancies);
      }
  
      // Menampilkan lowongan pekerjaan berdasarkan ID
      public function show($id)
      {
          $jobVacancy = Job_vacancy::findOrFail($id);
          return response()->json($jobVacancy);
      }
  
      // Membuat lowongan pekerjaan baru
      public function store(Request $request)
      {
          $request->validate([
              'job_title' => 'required|string|max:255',
              'job_description' => 'required|string',
              'location' => 'required|string',
              'salary_range' => 'nullable|string',
              'job_type' => 'required|in:full_time,part_time,internship,remote',
          ]);
  
          $jobVacancy = Job_vacancy::create([
              'company_id' => auth()->user()->company->id,
              'job_title' => $request->job_title,
              'job_description' => $request->job_description,
              'location' => $request->location,
              'salary_range' => $request->salary_range,
              'job_type' => $request->job_type,
          ]);
  
          return response()->json($jobVacancy, 201);
      }
  
      // Mengupdate lowongan pekerjaan
      public function update(Request $request, $id)
      {
          $jobVacancy = Job_vacancy::findOrFail($id);
  
          $request->validate([
              'job_title' => 'nullable|string|max:255',
              'job_description' => 'nullable|string',
              'location' => 'nullable|string',
              'salary_range' => 'nullable|string',
              'job_type' => 'nullable|in:full_time,part_time,internship,remote',
          ]);
  
          $jobVacancy->update($request->only([
              'job_title', 'job_description', 'location', 'salary_range', 'job_type'
          ]));
  
          return response()->json($jobVacancy);
      }
  
      // Menghapus lowongan pekerjaan
      public function destroy($id)
      {
          $jobVacancy = Job_vacancy::findOrFail($id);
          $jobVacancy->delete();
  
          return response()->json(['message' => 'Job vacancy deleted successfully']);
      }
}
