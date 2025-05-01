<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\JobCategory;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    // Perusahaan hanya dapat mengedit data mereka sendiri.
    // Menampilkan data perusahaan yang terkait dengan user
    public function show()
    {
        $locations = Location::all();
        $categories = JobCategory::all();
        $company = auth()->user()->company;

        return view('company.profile', compact('company', 'locations', 'categories'));
    }

    // Membuat data perusahaan baru
    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'company_website' => 'nullable|url',
            'industry_type' => 'nullable|string',
            'company_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'nullable|string',
            'phone_number' => 'nullable|string',
        ]);

        $company = Company::create([
            'user_id' => Auth::id(),
            'company_name' => $request->company_name,
            'description' => $request->description,
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

    public function update(Request $request)
{
    $company = auth()->user()->company;

    // Validate the input
    $request->validate([
        'company_name' => 'nullable|string|max:255',
        'description' => 'nullable|string|max:255',
        'company_website' => 'nullable|url',
        'industry_type' => 'nullable|string',
        'company_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'address' => 'nullable|string',
        'phone_number' => 'nullable|string',

        'current_password' => 'nullable|required_with:new_password|string|min:6',
        'new_password' => 'nullable|required_with:current_password|string|min:6|confirmed',  // validated by the confirmation field
    ]);

    // Update the company fields if they're filled
    $company->update($request->only([
        'company_name',
        'description',
        'company_website',
        'industry_type',
        'address',
        'phone_number',
    ]));

    // Handle logo upload
    if ($request->hasFile('company_logo')) {
        // Delete old logo if exists
        if ($company->company_logo && Storage::exists($company->company_logo)) {
            Storage::delete($company->company_logo);
        }

        // Store the new logo
        $company->company_logo = $request->file('company_logo')->store('images', 'public');
    }

    // Handle password update if current password and new password are provided
    if ($request->filled('current_password') && Hash::check($request->current_password, auth()->user()->password)) {
        // Update the password after validating current password
        auth()->user()->password = Hash::make($request->new_password);
        auth()->user()->save(); // Save the updated user password
    }

    // Save the updated company
    $company->save();

    // Return the updated company
    return redirect()->route('company.profile')->with('success', 'Perusahaan berhasil diperbarui.');
}

}
