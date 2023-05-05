<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $table = 'candidate';
    protected $primary = 'candidate_id';

    protected $fillable = [
        'candidate_id', 'full_name', 'dob', 'pob', 'gender', 'year_exp', 'last_salary'
    ];
}
