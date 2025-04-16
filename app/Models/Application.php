<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'job_vacancy_id', 'job_seeker_id', 'cover_letter', 'cv_link', 'status',
    ];

    // Relasi ke tabel job_vacancies (lowongan pekerjaan yang dilamar)
    public function jobVacancy()
    {
        return $this->belongsTo(Job_vacancy::class);
    }

    // Relasi ke tabel users (job seeker yang melamar)
    public function jobSeeker()
    {
        return $this->belongsTo(User::class, 'job_seeker_id');
    }
}
