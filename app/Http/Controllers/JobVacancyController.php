<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Job_vacancy;
use App\Models\JobCategory;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobVacancyController extends Controller
{
    // Menampilkan semua lowongan pekerjaan
    public function index()
    {
        try {
            $userId = Auth::id();
            $userIsCompany = Company::where('user_id', $userId)->exists();
            if ($userIsCompany) {
                return view('job_vacancy.index');
            }
        } catch (\Exception $e) {

            // $Auth::user()->authorizeRoles(['company', 'admin']);
            $jobVacancies = Job_vacancy::where('company_id', auth()->user()->company->id)->where('is_verified', true)->where('is_active', true)->get();
            return response()->json($jobVacancies);
        }
    }

    public function create()
    {
        $userId = Auth::id();
        $userIsCompany = Company::where('user_id', $userId)->exists();
        $locations = Location::all();
        $categories = JobCategory::all();
        // $jobTypes = [
        //     'full_time' => 'Full Time',
        //     'part_time' => 'Part Time',
        //     'internship' => 'Internship',
        //     'remote' => 'Remote',
        // ];
        // $salaryRanges = [
        //     '0-5' => '0 - 5 Juta',
        //     '5-10' => '5 - 10 Juta',
        //     '10-15' => '10 - 15 Juta',
        //     '15-20' => '15 - 20 Juta',
        //     '20+' => '20 Juta ke atas',
        // ];
        if ($userIsCompany) {
            // return 'create loker';
            // return redirect()->route('owner.dashboard')->with('error', 'Anda sudah memiliki properti.');
            return view('job_vacancy.create', compact('locations', 'categories'));
        }
        return view('company.create');
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
        $salary_min =   $request->salary_min ?? null;
        $salary_max =   $request->salary_max ?? null;

        $salary_range = $salary_min . '-' . $salary_max;
        // $request->merge(['salary_range' => $salary_range]);

        // return $request->all();
        $validator = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'job_type' => 'required|in:full_time,part_time,freelance',
            'location_id' => 'required|exists:locations,id',
        ]);

        $validator['salary_range'] = $salary_range;
        $validator['company_id'] = auth()->user()->company->id;

        Job_vacancy::create($validator);

        return "ok";

        return response()->json($jobVacancy, 201);
    }

    // Mengupdate lowongan pekerjaan
    // public function update(Request $request, $id)
    // {
    //     $jobVacancy = Job_vacancy::findOrFail($id);

    //     $request->validate([
    //         'job_title' => 'nullable|string|max:255',
    //         'job_description' => 'nullable|string',
    //         'location' => 'nullable|string',
    //         'salary_range' => 'nullable|string',
    //         'job_type' => 'nullable|in:full_time,part_time,internship,remote',
    //     ]);

    //     $jobVacancy->update($request->only([
    //         'job_title',
    //         'job_description',
    //         'location',
    //         'salary_range',
    //         'job_type'
    //     ]));

    //     return response()->json($jobVacancy);
    // }

    // Menghapus lowongan pekerjaan
    public function destroy($id)
    {
        $jobVacancy = Job_vacancy::findOrFail($id);
        $jobVacancy->delete();

        return response()->json(['message' => 'Job vacancy deleted successfully']);
    }
}
