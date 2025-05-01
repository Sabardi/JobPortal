<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Job_vacancy;
use App\Models\Job_vacancy_category;
use App\Models\JobCategory;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JobVacancyController extends Controller
{
    // Menampilkan semua lowongan pekerjaan
    public function index()
    {
        $locations = Location::all();
        $categories = JobCategory::all();

        if (!auth()->user()->company) {
            return redirect()->route('job.create');
        }

        $jobVacancies = Job_vacancy::where('company_id', auth()->user()->company->id)
            ->where('is_verified', true)
            ->where('is_active', true)
            ->get();

        return view('job_vacancy.index', compact('jobVacancies', 'locations', 'categories'));
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
    public function show( $id)
    {
        $jobVacancy = Job_vacancy::findOrFail($id);
        return view('job_vacancy.show', compact('jobVacancy'));
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
            'job_type' => 'required|in:full_time,part_time,internship,remote',
            'location_id' => 'required|exists:locations,id',
            'categories' => 'required|array', // Untuk kategori yang terkait
            'categories.*' => 'exists:job_categories,id', // Validasi ID kategori yang valid
        ]);

        $validator['salary_range'] = $salary_range;
        $validator['company_id'] = auth()->user()->company->id;
        // Mulai transaksi database
        DB::beginTransaction();

        try {
            $jobVacancy = Job_vacancy::create($validator);

            // Menyimpan kategori terkait
            foreach ($validator['categories'] as $categoryId) {
                Job_vacancy_category::create([
                    'job_vacancy_id' => $jobVacancy->id,
                    'job_category_id' => $categoryId,
                ]);
            }

            DB::commit();

            return redirect()->route('job.index')->with('success', 'Lowongan pekerjaan berhasil dibuat');
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    // edit
    public function edit(Job_vacancy $id)
    {
        $locations = Location::all();
        $categories = JobCategory::all();
        return view('job_vacancy.edit', compact('id', 'locations', 'categories'));
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

    public function update(Request $request, Job_vacancy $id)
    {

        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'job_type' => 'required|in:full_time,part_time,internship,remote',
            'location_id' => 'required|exists:locations,id',
            'categories' => 'nullable|array',
            'categories.*' => 'exists:job_categories,id',
        ]);

        // Update the salary range
        $salary_min = $request->salary_min ?? null;
        $salary_max = $request->salary_max ?? null;
        $salary_range = $salary_min . '-' . $salary_max;

        // Update job vacancy
        $id->update([
            'title' => $request->title,
            'description' => $request->description,
            'job_type' => $request->job_type,
            'location_id' => $request->location_id,
            'salary_range' => $salary_range,
            'company_id' => auth()->user()->company->id,
        ]);

        // foreach ($request['categories'] as $categoryId) {
        //     Job_vacancy_category::updateOrCreate(
        //         [
        //             'job_vacancy_id' => $id->id,
        //             'job_category_id' => $categoryId,
        //         ],
        //         []
        //     );
        // }
        // Update job categories
        // $id->Job_vacancy_category()->sync($request->categories);

        return redirect()->route('job.index')->with('success', 'Lowongan berhasil diperbarui');
    }
    // Menghapus lowongan pekerjaan
    public function destroy($id)
    {
        $jobVacancy = Job_vacancy::findOrFail($id);
        $jobVacancy->delete();

        return response()->json(['message' => 'Job vacancy deleted successfully']);
    }
}
