<?php

namespace App\Http\Controllers;

use App\Models\Job_vacancy;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     // Mengubah status verifikasi job vacancy
     public function verifyJob($id)
     {
         $jobVacancy = Job_vacancy::findOrFail($id);
 
         // Hanya admin yang bisa memverifikasi lowongan pekerjaan
         if (Auth()->user()->hasRole('admin')) {
             $jobVacancy->is_verified = true;
             $jobVacancy->save();
 
             return response()->json(['message' => 'Job vacancy verified successfully']);
         }
 
         return response()->json(['message' => 'Unauthorized'], 403);
     }
 
     // Menonaktifkan job vacancy
     public function deactivateJob($id)
     {
         $jobVacancy = Job_vacancy::findOrFail($id);
         $jobVacancy->is_active = false;
         $jobVacancy->save();
 
         return response()->json(['message' => 'Job vacancy deactivated successfully']);
     }
}
