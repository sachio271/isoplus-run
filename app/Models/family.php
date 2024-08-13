<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class family extends Model
{
    use HasFactory;

    protected $fillable = [
        'familyId',
        'ektp',
        'relation',
        'name',
        'gender',
        'birthDate',
        'birthPlace',
        'relationEktp',
        'education',
        'job',
        'insurance',
        'information',
        'createdBy',
        'createdDate',
        'changeBy',
        'changeDate',
    ];
}
