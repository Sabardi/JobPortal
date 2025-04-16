<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    // Perusahaan hanya dapat mengedit data mereka sendiri.
    // Menampilkan data perusahaan yang terkait dengan user
    public function show()
    {
        $company = auth()->user()->company;

        return response()->json($company);
    }

    // Membuat data perusahaan baru
    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'company_website' => 'nullable|url',
            'industry_type' => 'nullable|string',
            'company_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'nullable|string',
            'phone_number' => 'nullable|string',
        ]);

        $company = Company::create([
            'user_id' => Auth::id(),
            'company_name' => $request->company_name,
            'company_website' => $request->company_website,
            'industry_type' => $request->industry_type,
            'company_logo' => $request->company_logo,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
        ]);

        // Jika ada file logo yang diupload
        if ($request->hasFile('company_logo')) {
            // Ambil file dari request
            $company->company_logo = $request->file('company_logo')->store('images', 'public');
            $company->save();
        }
        return redirect()->route('job.create')->with('success', 'Perusahaan berhasil dibuat.');
    }

    // Mengupdate data perusahaan
    public function update(Request $request)
    {
        $company = auth()->user()->company;

        $request->validate([
            'company_name' => 'nullable|string|max:255',
            'company_website' => 'nullable|url',
            'industry_type' => 'nullable|string',
            'company_logo' => 'nullable|string',
            'address' => 'nullable|string',
            'phone_number' => 'nullable|string',
        ]);

        $company->update($request->only([
            'company_name',
            'company_website',
            'industry_type',
            'company_logo',
            'address',
            'phone_number'
        ]));
        //   upload image
        if ($request->hasFile('company_logo')) {
            $file = $request->file('company_logo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $company->company_logo = $filename;
            $company->save();
        }

        return response()->json($company);
    }
}
