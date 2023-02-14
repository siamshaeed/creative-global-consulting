<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $table = 'universities';
    
    protected $fillable = [
        'name',
        'pathway_provider',

        'ug_ac_req_education',
        'ug_ac_req_gpa',
        'ug_ac_req_group',
        'ug_is_active',
        'ug_ielts_start',
        'ug_ielts_end',

        'pg_ac_req_education',
        'pg_ac_req_cgpa',
        'pg_ac_req_group',
        'pg_is_active',
        'pg_ielts_start',
        'pg_ielts_end',

        'oietc',
        'internal_test',
        'moi',
        'duolingo_is_active',
        'duolingo_start',
        'duolingo_end',
        
        'pg_study_gap',
        'tution_fees',
        'scholarships',
        'remarks'
    ];
}
