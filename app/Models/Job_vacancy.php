<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job_vacancy extends Model
{
    protected $fillable = [
        'company_id', 'job_title', 'job_description', 'location', 'salary_range', 'job_type', 'is_verified', 'is_active',
    ];

    // Relasi ke tabel company (perusahaan yang memposting lowongan pekerjaan)
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // Relasi ke tabel applications (aplikasi pekerjaan yang dikirim job seeker)
    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    // Relasi ke kategori job (optional)
    public function categories()
    {
        return $this->belongsToMany(JobCategory::class, 'job_vacancy_category');
    }
}
