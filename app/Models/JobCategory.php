<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    protected $fillable = [
        'name', 'description',
    ];

    // Relasi ke tabel job_vacancies melalui pivot table
    public function jobVacancies()
    {
        return $this->belongsToMany(Job_vacancy::class, 'job_vacancy_category');
    }
}
