<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'user_id', 'company_name', 'company_website', 'industry_type', 'company_logo', 'address', 'phone_number',
    ];

    // Relasi ke tabel users (user perusahaan)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke tabel job_vacancies (lowongan pekerjaan yang diposting perusahaan)
    public function jobVacancies()
    {
        return $this->hasMany(Job_vacancy::class);
    }
}
